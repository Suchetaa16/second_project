<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Category;

class StudentController extends Controller
{
  
  
  public function index()
  {

    
  
    $cat=Category::all();
    $title = "Create";
    $url=url('/register');
    $data=compact('url', 'cat', 'title');
    return view('registration')->with($data);
  }

  public function store(Request $request)
  {
    
    $request->validate(
      [

        'name'=>'required',
        // 'user_name'=>'required', // Ye kya hai
        'email'=>'required|email',
        'dob'=>'required',
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
    // $student->user_name=$request['user_name'];
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
    if($student){
      return back()->with('success','you have registered successfully');
    }else{
      return back()->with('fail','Something Wrong');
    }
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
    $cat=Category::all();
    $title = "Update";
    if(is_null($student)){
      return redirect('/student/view');
    }else{
      $url=url('/student/update') ."/". $id;
      $data=compact('student','url', 'cat', 'title');
    return view('registration')->with($data);
    }
  }
  public function update($id, Request $request){
    $student=Student::find($id);
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
}