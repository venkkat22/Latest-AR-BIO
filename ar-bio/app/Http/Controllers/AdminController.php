<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Exam;
use App\Models\Answer;
use App\Models\QnaExam;
use App\Models\Question;
use App\Models\Reading;
use App\Models\ExamAttempt;
use App\Models\ExamAnswer;




class AdminController extends Controller
{

    
     public function index()
        {
            $readings = Reading::all();
            $subjects = Subject::all();
            $exams = Exam::all();
            $questions = Question::all();
    
            return view('admin.HomeDashboard', compact('readings', 'subjects', 'exams', 'questions'));
        }
    

    public function adminDashboard()
    {
        $subject = Subject::all();
        return view ('admin.dashboard',compact('subject'));
    }
    //
    public function addSubject(Request $request)
    {
        try{

            Subject::insert([
                'subject' => $request->subject
            ]);

            return response()->json(['success'=>true,'msg'=>'Subject added Successfully!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        };
        
    }
    //edit 
    public function editSubject(Request $request)
    {
        try{

            $subject = Subject::find($request->id);
            $subject->subject= $request->subject;
            $subject->save();

           
            return response()->json(['success'=>true,'msg'=>'Subject Updated Successfully!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        };
        
    }


    //delete sub
    public function deleteSubject(Request $request)
    {
        try{

           

            Subject::where('id',$request->id)->delete();
            return response()->json(['success'=>true,'msg'=>'Subject Deleted Successfully!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        };
        
    }

    //Exam dashboard 
    public function examDashboard()
    {
        $subject = Subject::all();
        $exams = Exam::with ('subject')->get();
        return view('admin.exam-dashboard',['subject'=>$subject,'exams'=>$exams]);
    }

    //addExam
    public function addExam(Request $request)
    {
        try{
            $unique_id = uniqid('exid');
            Exam::insert([
                'exam_name'=> $request->exam_name,
                'subject_id'=> $request->subject_id,
                'date'=> $request->date,
                'time'=> $request->time,
                'attempt'=> $request->attempt,
                'enterance_id'=>$unique_id

            ]);

        
            return response()->json(['success'=>true,'msg'=>'Exam Added Successfully!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        };
    }

    public function getExamDetail($id)
    {
        try{
           
            $exam = Exam::where('id',$id)->get();
            return response()->json(['success'=>true,'data'=>$exam]);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        };

    }

    public function updateExam(Request $request)
    {
        try{
            
        $exam = Exam::find($request->exam_id);
        $exam->exam_name = $request->exam_name;
        $exam->subject_id = $request->subject_id;
        $exam->date = $request->date;
        $exam->time = $request->time;
        $exam->attempt = $request->attempt;
        $exam->save();
        return response()->json(['success'=>true,'msg'=>'Exam Updated Successfully!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        };
    }

    //delete Exam
    public function deleteExam(Request $request)
    {
        try{

            Exam::where('id',$request->exam_id)->delete();
            return response()->json(['success'=>true,'msg'=>'Exam deleted Successfully!']);

        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        };

    }

    public function qnaDashboard()
    {
        $questions = Question::with('answers')->get();
        return view('admin.qnaDashboard',compact('questions'));
    }

    //add Q&A
    public function addQna(Request $request)
    {
        try{

            $questionID = Question::insertGetId([
                'question' => $request->question
            ]);


            foreach($request->answers as $answer){
            $is_correct = 0;
            if($request->is_correct == $answer){
                $is_correct= 1;
            }

                Answer::insert([
                'questions_id' => $questionID,
                'answer' => $answer,
                'is_correct' => $is_correct

                ]);
            }

            Exam::where('id',$request->exam_id)->delete();
            return response()->json(['success'=>true,'msg'=>'Exam deleted Successfully!']);

        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        };
    }
    

    public function getQnaDetails(Request $request)
    {
       $qna = Question::where('id',$request->qid)->with('answers')->get();

       return response()->json(['data'=>$qna]);
    }

    public function deleteAns(Request $request)
    {
        Answer::where('id',$request->id)->delete();
        return response()->json(['success'=>true,'msg'=>'Answer delete successfully!']);

    }

    public function updateQna(Request $request)
    {
        try{

            Question::where('id',$request->question_id)->update([
                'question'=> $request->question
            ]);
            //old answer update
            if(isset($request->answers)){

                foreach($request->answers as $key => $value){

                    $is_correct = 0;
                    if($request->is_correct == $value){
                        $is_correct = 1;
                    }

                    Answer::where('id',$key)
                    ->update([
                        'questions_id' => $request->question_id,
                        'answer'=> $value,
                        'is_correct' => $is_correct
                    ]);

                }

            }

            //new answers added
            if(isset($request->new_answers)){

                foreach($request->new_answers as $answer){

                    $is_correct = 0;
                    if($request->is_correct == $answer){
                        $is_correct = 1;
                    }

                    Answer::insert([
                        'questions_id' => $request->question_id,
                        'answer'=> $answer,
                        'is_correct' => $is_correct
                    ]);

                }

            }
            return response()->json(['success'=>true,'msg'=> 'Q&A updated successfuly!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        };

        
        

    }

    public function deleteQna(Request $request)
    {
        Question::where('id',$request->id)->delete();
        Answer::where('questions_id',$request->id)->delete();
        
        return response()->json(['success'=>true,'msg'=> 'Q&A deleted successfuly!']);

    }

    public function getQuestions(Request $request)
    {
        try {

            $questions = Question::all();
            if(count($questions) > 0){

                $data=[];
                $counter = 0;

                foreach($questions as $question)
                {
                    $qnaExam = QnaExam::where(['exam_id'=>$request->exam_id,'question_id'=>$question->id])->get();
                    if(count($qnaExam) == 0){
                        $data[$counter]['id'] = $question->id;
                        $data[$counter]['questions'] = $question->question;
                        $counter++; 

                    }

                }
                return response()->json(['success'=>true,'msg'=>'Questions data!','data'=>$data ]);


            }
            else{
                return response()->json(['success'=>false,'msg'=>'Questions Not Found!']);
            }

        //code
        }catch(\Exception $e){
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }

    public function addQuestions(Request $request)
    {
        try{

            if(isset($request->questions_ids)){
                foreach($request->questions_ids as $qid){
                    QnaExam::insert([
                        'exam_id' => $request->exam_id,
                        'question_id' => $qid
                    ]);
                }

            }
            return response()->json(['success'=>true, 'msg'=>'Questions added Successfully!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }

    public function getExamQuestions(Request $request)
    {
        try {

            $data = QnaExam::where('exam_id', $request->exam_id)->with('question')->get();
            return response()->json(['success'=>true, 'msg'=>'Questions details!', 'data'=>$data]);


        }catch(\Exception $e){
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }

    }

    public function deleteExamQuestions(Request $request)
    {
        try {

            QnaExam::where('id', $request->id)->delete();
            return response()->json(['success'=>true, 'msg'=>'Questions deleted!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }

    }

    public function loadMarks()
    {
        $exams = Exam::with('getQnaExam')->get();
        return view('admin.marksDashboard',compact('exams'));
    }

    public function updateMarks(Request $request)
    {
        try{
            

            Exam::where('id',$request->exam_id)->update([
                'marks' => $request->marks
            ]);
            
     
            return response()->json(['success'=>true, 'msg'=>'Marks Updated!']);
        

        }catch(\Exception $e){
            

            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }

    }


    //readingcontent
    public function ReadContent()
    {
        $reading = Reading::all();
        return view ('admin.readcontentDashboard',compact('reading'));
    }
    //
    public function addReading(Request $request)
    {
        try{

            Reading::insert([
                'reading' => $request->reading,
                'reading_title' => $request->reading_title,
                'chapter' => $request->chapter,
                'form' => $request->form
                
            ]);

            return response()->json(['success'=>true,'msg'=>'Reading added Successfully!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
        
    }
    //edit 
    public function editReading(Request $request)
    {
        try{

            $reading = Reading::find($request->id);
            $reading->reading= $request->reading;
            $reading->reading_title= $request->reading_title;
            $reading->chapter= $request->chapter;
            $reading->form= $request->form;
            $reading->save();

           
            return response()->json(['success'=>true,'msg'=>'Subject Updated Successfully!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
        
    }


    //delete reading
    public function deleteReading(Request $request)
    {
        try{

           

            Reading::where('id',$request->id)->delete();
            return response()->json(['success'=>true,'msg'=>'Reading Deleted Successfully!']);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
        
    }

    public function reviewExams()
    {
        $attempts = ExamAttempt::with(['user','exam'])->orderBy('id')->get();

        return view('admin.review-exams',compact('attempts'));

    }

    public function reviewQna(Request $request)
    {

        try{

         $attemptData = ExamAnswer::where('attempt_id',$request->attempt_id)->with(['question','answers'])->get();
         return response()->json(['success'=>true,'data'=>$attemptData]);


        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }

    }

    public function approvedQna(Request $request)
    {
        try{

            $attemptId = $request->attempt_id;

            $examData = ExamAttempt::where('id',$attemptId)->with('exam')->get();
            
            $marks = $examData[0]['exam']['marks'];

            $attemptData = ExamAnswer::where('attempt_id',$attemptId)->with('answers')->get();

            $totalMarks = 0;

            if(count($attemptData) > 0){

                foreach($attemptData as $attempt){

                    if($attempt->answers->is_correct == 1){
                        $totalMarks += $marks;

                    }
                }

            }
            ExamAttempt::where('id',$attemptId)->update([
                'status' => 1,
                'marks' => $totalMarks
            ]);
            
           return response()->json(['success'=>true,'msg'=>'Approved Successfully!']);

        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
    }
}
