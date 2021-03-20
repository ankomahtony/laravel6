<?php

namespace App\Http\Controllers;

use App\District;
use App\Exam;
use App\Region;
use App\Student;
use App\StudentClass;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
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
        $students = Student::paginate(5);
        return view('dashboard.students',['page_title'=>'Student','students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        $districts = District::all();
        $classes = StudentClass::all();
        return view('forms.create.student',['page_title'=>"Add Student",
            'regions'=>$regions,
            'districts'=>$districts,
            'classes' => $classes
        ]);      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this->validateMember();   
        
        $member = new Student();
        $member->index_number = request('index_number');
        $member->last_name = request('last_name');
        $member->other_name = request('other_name');
        $member->gender = request('gender');
        $member->phone = request('phone');
        $member->email = request('email');
        $member->mother = request('mother');
        $member->father = request('father');
        $member->guardian = request('guardian');
        $member->dob = request('dob');
        $member->class = request('class');
        $member->town = request('town');
        $member->gps_address = request('gps_address');
        $member->district = request('district');
        $member->region = request('region');
        $member->religion = request('religion');
        $member->postal_address = request('postal_address');
        if($request->picture != NULL){
            $fileName_s = request('last_name').request('other_name').request('dob');;
            $fileName = $fileName_s.'.'.$request->picture->extension(); 
            $request->picture->move(public_path('images/students'), $fileName);
            $member_pic = $fileName;
        }else{
            $member_pic = 'avatar.PNG';
        }
        $member->picture = $member_pic;
        $member->save();

        $password = Hash::make('tony');
        $user = new User();
        $user->name = request('other_name').' '.request('last_name');
        $user->email = request('email');
        $user->password = $password;
        $user->user_type = 'Student';
        $user->picture = $member_pic;
        $user->index_number = request('index_number');
        $user->approved = 'Yes';
        $user->save();

        return redirect('/students');
    }
    protected function validateMember(){
        return request() -> validate([
            'index_number'=>'required',
            'last_name' => 'required',
            'other_name' => 'required',
            'gender'=>'required',
            'mother'=>'required',
            'father'=>'required',
            'guardian'=>'required',
            'dob'=>'required',
            'class'=>'required',
            'town'=>'required',
            'region'=>'required',
            'district'=>'required',
            'picture' =>'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $exams = Exam::where('exam_class',$student->class)->get();
        return view('student.profile',['student'=>$student,'exams'=>$exams, 'page_title'=>$student->title.' '.$student->last_name.' '.$student->other_name.' Profile']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('forms.edit.student',compact('student'),['page_title'=>"Edit Student"]); 
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

    public function exam()
    {
        return view('exam',['page_title'=>'Taking Exams']);
    }
    public function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request -> get('query');
            if($query != '')
            {
                $data = Student::select("*")->where('other_name','like','%'.$query.'%')
                                        ->orWhere('last_name','like','%'.$query.'%')
                                        ->orWhere('mother','like','%'.$query.'%')
                                        ->orWhere('phone','like','%'.$query.'%')
                                        ->orWhere('email','like','%'.$query.'%')
                                        ->orderBy('last_name','asc')
                                        ->orderBy('other_name','asc')
                                        ->get();

                dd($data);
                
            }else{
                $data = Student::all();
            }
            $total_row = $data->count();
            $n_row = 1;
            if($total_row>0){
                foreach($data as $row)
                {
                    $row_dob = $row->dob;
                    $row_year = substr($row_dob, 0, 4);
                    $row_age  = 2020 - $row_year;
                    $w_dues = 100;
                    if($row_age < 18){
                        $w_dues = 'N/A';
                    }
                    $output .=
                    '
                    <tr class="row align-items-center border-top-1">
                        <th class="col-xs-1 col-sm-1 col-md-2  col-lg-1 d-none d-sm-block">
                            '.$n_row.'. '.'
                        </th> 
                        <td class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                            <a href="/members/'.$row->id.'" class="col-aka"> '.$row->last_name.' '.$row->other_name.'</a>
                        </td>
                        <td class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-left">
                            '.$row_age.'
                        </td>
                        <td class="col-sm-3 col-md-3 col-lg-3 d-none d-md-block text-left">
                            '.$row->email.'
                        </td>
                         <td class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-left">
                             '.$row->phone.'
                            </td>
                         <td class="col-sm-1 col-md-1 col-lg-1 d-none d-sm-block text-left">'.$row->class.' </td> 
                         
                        <td class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center">
                            <div class="dropdown"><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-neutral btn-sm text-light items-align-center py-2">
                                <i class="fa fa-ellipsis-h text-muted"></i></a> 
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="/members/'.$row->id.'" class="dropdown-item">Show</a> 
                                    <a href="/members/'.$row->id.'/edit" class="dropdown-item">Edit</a> 
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-divider"></div> 
                                    <button type="button" title="Delete" class="dropdown-item action-delete">Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>';
                    $n_row = $n_row + 1;
                }
            }
            else
            {
                $output .= '<tr><td align="center" colspan="5">No Result Found</td></tr>';
            }
            $data = array(
                'table_data' => $output
            );
            echo json_encode($data);
        }
    }

}
