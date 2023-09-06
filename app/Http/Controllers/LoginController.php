<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

     //Yahan pe Auth use na krke, Direct values ko check kr lijiye, agar user logged in hota hai to cookies mein store kr dijiye 

     //ok sir try krti hu, Okay, Class aaj hi krna hai ya kal?sir kal krte hai okay phir


     if(Auth::attempt($request->only('email','password')))
    {
      return redirect('/');
    }
    return redirect('login')->withError('Invalid email or password');

  }

  public function logout(){
    Session::flush();
    Auth::logout();
    return redirect(route('view-home'));
  }
}