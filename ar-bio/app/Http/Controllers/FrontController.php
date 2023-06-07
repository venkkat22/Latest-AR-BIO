<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Subject;
use App\Models\Reading;


class FrontController extends Controller
{
    //
    public function DisplayExam()
    {

       $exams = Exam::with('subject')->orderBy('date')->get();
        return view ('dashboard',['exams'=>$exams]);
    }

    public function Quiz()
    {

       $exams = Exam::with('subject')->orderBy('date')->get();
        return view ('subjects.quiz',['exams'=>$exams]);
    }

    //readingcontent
    public function Read()
    {
        $reading = Reading::all();
    
       return view ('subjects.form4',compact('reading'));
    }

    public function ReadForm5c2()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp2',compact('reading'));
    }

    public function ReadForm5c3()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp3',compact('reading'));
    }

    public function ReadForm5c4()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp4',compact('reading'));
    }

    public function ReadForm5c5()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp5',compact('reading'));
    }

    public function ReadForm5c6()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp6',compact('reading'));
    }

    public function ReadForm5c7()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp7',compact('reading'));
    }

    public function ReadForm5c8()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp8',compact('reading'));
    }

    public function ReadForm5c9()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp9',compact('reading'));
    }


    public function ReadForm5c10()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp10',compact('reading'));
    }

    public function ReadForm5c11()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp11',compact('reading'));
    }

    public function ReadForm5c12()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp12',compact('reading'));
    }

    public function ReadForm5c13()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5chp13',compact('reading'));
    }

    public function ReadForm5()
    {
        $reading = Reading::all();
    
       return view ('subjects.form5',compact('reading'));
    }
}
