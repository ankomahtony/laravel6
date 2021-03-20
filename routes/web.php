<?php

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

use App\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// use Illuminate\Routing\Route;

// Route::get('/exam',function ($id){
//     $exam_qtns = Question::where('exam_id',$id)->paginate(1);
//     return view('exam', ['page_title'=>'Social Studies Examination','exam_qtns'=>$exam_qtns]);
// });

Auth::routes();

Route::get('/students/action', 'StudentController@action')->name('student_action');
Route::get('/exams/action', 'ExamController@action')->name('exam_action');
Route::get('/options/opt_action', 'OptionController@opt_action')->name('opt_action');
Route::get('/students/exams', 'StudentController@exam');
Route::get('/', 'Controller@index');

Route::resource('students','StudentController');
Route::resource('exams','ExamController');
Route::resource('questions','QuestionController');
Route::resource('options','OptionController');
Route::resource('regions','RegionController');
Route::resource('results','ResultController');
Route::resource('tests','TestController');
Route::resource('districts','DistrictController');
Route::resource('std_classes','ClassController');