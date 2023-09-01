<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Category;
use App\Models\Purchased_course;

class PurchaseController extends Controller
{
  public function index()
  {
    $data=Purchased_course::all();
    
    return view('purchase',['data'=>$data]);
  }

  public function store(Request $request)
  {
    
    $request->validate(
      [

        'txn_id'=>'required',
        'purchase_date'=>'required',
        'items'=>'required',
        'qty'=>'required',
      ]

    );
    $purchased_course=new Purchased_course;
    //$purchase->name=$request['name'];
    //$purchase->id=$request['id'];
    $purchased_course->txn_id=$request['txn_id'];
    $purchased_course->purchase_date=$request['purchase_date'];
    $purchased_course->items=$request['items'];
    $purchased_course->qty=$request['qty'];
    $purchased_course->save();
    return redirect('/purchase');

  }
  function view(Request $request){
        $search=$request['search'] ?? "";
        if($search!=""){
          $purchased_courses=Purchased_course::where("name",'=',$search)->get();
    
        }else{
          $students=$Student::all();
        }
    $purchased_courses = Purchased_Course::all();
    $data = compact('purchased_courses');
    return view('purchase-view')->with($data);
  }
}