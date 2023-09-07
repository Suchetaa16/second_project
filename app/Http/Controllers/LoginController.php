<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Student;
use App\Models\Category;
use App\Models\Purchased_course;

class LoginController extends Controller
{
  public function index()
  {
    return view('login');

  }
  public function login(Request $request)
  {
     $request->validate([
        'email'=>'required',
        'password'=>'required',
     ]);
     
    $student=Student::where('email','=',$request->email)->first();
    if($student){
      if(md5($request->password) == $student->password){
        $request->session()->put('loginId',$student->id);
        return redirect('/index');
      }else{
        return back()->with('fail','Invalid Password');
      }

    }else{
      return back()->with('fail','This email is invalid');

    }
     

  }

  public function logout(){
    if(Session::has('loginId')){
       Session::pull('loginId');
    return redirect('/');
    }
  }
}