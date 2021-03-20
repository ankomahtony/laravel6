<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Option;
use App\Question;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $optio = Option::find(4);
        $answer = Question::find(1);

        if($optio->option == $answer->answer)
        {
            dd(True);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($qtn_id =NULL)
    {
        $qtn_id = $_GET['qtn_id'] ?? NULL;
        $options = Option::where('qtn_id',$qtn_id)->get();
        $questions = Question::where('id',$qtn_id)->get();
        if($options->count() > 0){
            $options = Option::where('qtn_id',$qtn_id)->get();
            $question = Question::find($qtn_id);
            $exam = Exam::find($question->exam_id);
            return view('forms.edit.option',['page_title'=>'Edit Options','question'=>$question,'exam'=>$exam,'options'=>$options]);
        }
        if($questions->count() < 1){
            $questions = Question::all();
            $exams = Exam::all();
        }else{
            $question = Question::find($qtn_id);
            $exams = Exam::where('id',$question->exam_id)->get();
        }
        return view('forms.create.option',['page_title'=>"Create Option",'questions'=>$questions,'exams'=>$exams]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateOption();
        $qtn_id = request('qtn_id');
        $qtn = Question::find($qtn_id);
        $opt = Option::where('qtn_id',$qtn_id)->get();
        $options = request('option');
        if($opt != NULL)
        {
            foreach($options as $option){
                if($option != NULL)
                {
                    $option_new = new Option();
                    $option_new->option = $option;
                    $option_new->qtn_id = $qtn_id;
                    $option_new->save();
                }
    
            }
        }else
        {
            $n = 0;
            foreach($options as $option){
                $option_up = $opt[$n];
                if($option != NULL)
                {
                    $option_up->option = $option;
                    $option_up->qtn_id = $qtn_id;
                    $option_up->save();
                    $n +=1;
                }
    
            }
        }
        $A = request('A');
        $B = request('B');
        $C = request('C');
        $D = request('D');
        $E = request('E');
        if($A != NULL)
        {
            $qtn->answer = $options[0];
        }elseif($B != NULL)
        {
            $qtn->answer = $options[1];
        }elseif($C != NULL)
        {
            $qtn->answer = $options[2];
        }elseif($D != NULL)
        {
            $qtn->answer = $options[3];
        }elseif($E != NULL)
        {
            $qtn->answer = $options[4];
        }else{
            echo 'Choose Answer';
        }
        
        $qtn->save();

        return redirect('/exams');
    }
    protected function validateOption(){
        return request() -> validate([
            'option' => 'required',
            'qtn_id' => 'required'
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $options = Option::where('qtn_id',$question->id)->get();
        $exams = Exam::where('id',$question->exam_id)->get();
        return view('forms.edit.option',['page_title'=>'Edit Options', 'options'=>$options,'exams'=>$exams,'question'=>$question]);
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

    public function opt_action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request -> get('query');
            if($query != '')
            {
                $data = Question::where('exam_id',$query)->get();
                
            }else{
                $data = Question::all();
            }
            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row)
                {
                    $output .='<option value="'.$row->id.'">'.$row->question.'</option>';
                }
            }
            else
            {
                $output .= '<option>Add Question</option>';
            }
            $data = array(
                'table_data' => $output,
            );
            echo json_encode($data);
        }
    }
}
