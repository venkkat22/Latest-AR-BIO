<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ExamController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index-student', function () {
    return view('index');
});

Route::get('/subjects/AR', function () {
    return view('subjects.AR');
});

Route::get('/subjects/form4',[FrontController::class,'Read'])->name('Read');
Route::get('/subjects/form5',[FrontController::class,'ReadForm5'])->name('ReadForm5');
Route::get('/subjects/form5chp11',[FrontController::class,'ReadForm5c11'])->name('ReadForm5c11');
Route::get('/subjects/form5chp2',[FrontController::class,'ReadForm5c2'])->name('ReadForm5c2');
Route::get('/subjects/form5chp3',[FrontController::class,'ReadForm5c3'])->name('ReadForm5c3');
Route::get('/subjects/form5chp4',[FrontController::class,'ReadForm5c4'])->name('ReadForm5c4');
Route::get('/subjects/form5chp5',[FrontController::class,'ReadForm5c5'])->name('ReadForm5c5');
Route::get('/subjects/form5chp6',[FrontController::class,'ReadForm5c6'])->name('ReadForm5c6');
Route::get('/subjects/form5chp7',[FrontController::class,'ReadForm5c7'])->name('ReadForm5c7');
Route::get('/subjects/form5chp8',[FrontController::class,'ReadForm5c8'])->name('ReadForm5c8');
Route::get('/subjects/form5chp9',[FrontController::class,'ReadForm5c9'])->name('ReadForm5c9');
Route::get('/subjects/form5chp10',[FrontController::class,'ReadForm5c10'])->name('ReadForm5c10');
Route::get('/subjects/form5chp12',[FrontController::class,'ReadForm5c12'])->name('ReadForm5c12');
Route::get('/subjects/form5chp13',[FrontController::class,'ReadForm5c13'])->name('ReadForm5c13');

// Route::get('/subjects/{form}/{chapter?}', [FrontController::class, 'Read'])->name('Read');

// Route::get('/subjects/form4', function () {
//     return view('subjects.form4');
// });



Route::get('/subjects/computer_courses', function () {
    return view('subjects.computer_courses');
});

Route::get('/homepage', function () {
    return view('homepage');
});


Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
Route::post('/add-subject',[AdminController::class,'addSubject'])->name('addSubject');
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

//test in user side too see if exam can be displayed
Route::get('/dashboard', [FrontController::class, 'DisplayExam'])->name('dashboard');
Route::get('/subjects/quiz', [FrontController::class, 'Quiz'])->name('subjects.quiz');
Route::get('/exam/{id}', [ExamController::class, 'loadExamDashboard']);
Route::post('/exam-submit', [ExamController::class, 'examSubmit'])->name('examSubmit');



Route::get('/admin/dashboard',[AdminController::class,'adminDashboard'])->name('adminDashboard');
//subject
Route::get('/admin/dashboard',[AdminController::class,'adminDashboard'])->name('adminDashboard');
Route::post('/add-subject',[AdminController::class,'addSubject'])->name('addSubject');
Route::post('/edit-subject',[AdminController::class,'editSubject'])->name('editSubject');
Route::post('/delete-subject',[AdminController::class,'deleteSubject'])->name('deleteSubject');

//exam route
Route::get('/admin/exam',[AdminController::class,'examDashboard']);
Route::post('/add-exam',[AdminController::class,'addExam'])->name('addExam');
Route::get('/get-exam-detail/{id}',[AdminController::class,'getExamDetail'])->name('getExamDetail');
Route::post('/update-exam',[AdminController::class,'updateExam'])->name('updateExam');
Route::post('/delete-exam',[AdminController::class,'deleteExam'])->name('deleteExam');

//Question and answers route
Route::get('/admin/qna-ans',[AdminController::class,'qnaDashboard']);
Route::post('/add-qna-ans',[AdminController::class,'addQna'])->name('addQna');
Route::get('/get-qna-details',[AdminController::class,'getQnaDetails'])->name('getQnaDetails');
Route::get('/delete-ans',[AdminController::class,'deleteAns'])->name('deleteAns');

Route::post('/update-qna-ans',[AdminController::class,'updateQna'])->name('updateQna');
Route::post('/delete-qna-ans',[AdminController::class,'deleteQna'])->name('deleteQna');

//qna exams routing
Route::get('/get-questions',[AdminController::class,'getQuestions'])->name('getQuestions');
Route::post('/add-questions',[AdminController::class,'addQuestions'])->name('addQuestions');
Route::get('/get-exam-questions',[AdminController::class,'getExamQuestions'])->name('getExamQuestions');
Route::get('/delete-exam-questions',[AdminController::class,'deleteExamQuestions'])->name('deleteExamQuestions');
Route::get('/admin/marks',[AdminController::class,'loadMarks']);
Route::post('/update-marks',[AdminController::class,'updateMarks'])->name('updateMarks');

//adminhome
Route::get('/admin/HomeDashboard',[AdminController::class,'index'])->name('admin.HomeDashboard');



//readcontentDashboard
Route::get('/admin/readcontentDashboard',[AdminController::class,'ReadContent'])->name('ReadContent');
Route::post('/addReadContent',[AdminController::class,'addReading'])->name('addReading');
Route::post('/editReadContent',[AdminController::class,'editReading'])->name('editReading');
Route::post('/deleteReadContent',[AdminController::class,'deleteReading'])->name('deleteReading');


//exam review
Route::get('/admin/review-exams',[AdminController::class,'reviewExams'])->name('reviewExams');
Route::get('/get-reviewed-qna',[AdminController::class,'reviewQna'])->name('reviewQna');
Route::post('/approved-qna',[AdminController::class,'approvedQna'])->name('approvedQna');

