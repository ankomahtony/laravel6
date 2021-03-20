<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Question;
use App\StudentClass;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $exams = Exam::all();
        return view('dashboard.exams', ['page_title'=>'Examinations','exams'=>$exams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = StudentClass::all();
        return view('forms.create.exam',['page_title'=>'Create Exam','classes'=>$classes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateExam();
        Exam::create($this->validateExam());

        return redirect('/exams');
    }
    protected function validateExam(){
        return request() -> validate([
            'name' => 'required',
            'due_date' => 'required',
            'duration'=>'required',
            'mark_per_question'=>'required',
            'exam_class'=>'required',
            'status'=>'required'
        ]);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        $exam_class = StudentClass::find($exam->exam_class);
        $questions = Question::where('exam_id',$exam->id)->get();
        return view('dashboard.show.exam',compact('exam'), ['page_title'=>$exam->name.' for '.$exam_class->name, 'questions'=>$questions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function action()
    {

    }
}
