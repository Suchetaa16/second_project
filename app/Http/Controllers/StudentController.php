<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
  public function index()
  {
    $data=Student::all();
    return view('registration',['data'=>$data]);
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
    $student->phone_no=$request['phone_no'];
    $student->state=$request['state'];
    $student->state=$request['state'];
    $student->country=$request['country'];
    $student->address=$request['address'];
    $student->password=md5($request['password']);
    $student->save();
    //return redirect('/customer/view');

  }
}