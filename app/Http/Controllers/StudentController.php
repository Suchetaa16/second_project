<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Category;

class StudentController extends Controller
{
  
  public function index()
  {
  

    
    $data=Category::all();
    return view('registration',['data'=>$data]);
  }
  public function show()
  {

    $url=url('/register');
    $data=compact('url');
    return view('registration')->with($data);
  }

  public function store(Request $request)
  {
    
    $request->validate(
      [

        'name'=>'required',
        'email'=>'required|email',
        'dob'=>'required',
        'gender'=>'required|in:male,female',
        'class'=>'required',
        'course_cat'=>'required',
        'phone_no'=>'required',
        'state'=> 'required',
        'country'=>'required',
        'address'=>'required',
        'password'=>'required',
        'confirm_password'=>'required|same:password',
      ]

    );
    $student=new Student;
    $student->name=$request['name'];
    $student->email=$request['email'];
    $student->dob=$request['dob'];
    $student->gender=$request['gender'];
    $student->class=$request['class'];
    $student->course_cat=$request['course_cat'];
    $student->phone_no=$request['phone_no'];
    $student->state=$request['state'];
    $student->country=$request['country'];
    $student->address=$request['address'];
    $student->password=md5($request['password']);
    $student->save();
    return redirect('/student/view');

  }
  function list(Request $request){
    $search=$request['search'] ?? "";
    if($search!=""){
      $students=Student::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();

    }else{
      $students=Student::all();
    }
    $data = compact('students','search');
    return view('student-view')->with($data);
  }
  public function delete($id){
    $student=Student::find($id);
    if(!is_null($student)){
      $student->delete();
    }
    return redirect()->back();
  }
  public function edit($id){
    $student=Student::find($id);
    if(is_null($student)){
      return redirect('registration');
    }else{
      $url=url('student/update') ."/". $id;
      $data=compact('student','url');
    return view('registration')->with($data);
    }
  }
}