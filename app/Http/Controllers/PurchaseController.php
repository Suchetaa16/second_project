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
    $data=Student::all();
    
    return view('purchase',['data'=>$data]);

  }

  public function store(Request $request)
  {
    
    $request->validate(
      [
        'name'=>'required',

        'txn_id'=>'required',
        'purchase_date'=>'required',
        'items'=>'required',
        'qty'=>'required',
      ]

    );
    $purchased_course=new Purchased_course;
    $purchased_course->stu_name=$request['name'];
    //$purchase->id=$request['id'];
    $purchased_course->txn_id=$request['txn_id'];
    $purchased_course->purchase_date=$request['purchase_date'];
    $purchased_course->items=$request['items'];
    $purchased_course->qty=$request['qty'];
    $purchased_course->save();
    return redirect('/purchase/view');

  }
  function view(Request $request){
        $search=$request['search'] ?? "";
        if($search!=""){
          $purchased_courses=Purchased_course::where("stu_name",'LIKE',"%$search%")->orwhere("purchase_date",'LIKE',"%$search%")->get();
    
        }else{
          $purchased_courses=Purchased_course::all();
        }
        $data = compact('purchased_courses','search');
        return view('purchase-view')->with($data);
  }
  public function delete($id){
    $purchased_course=Purchased_course::find($id);
    if(!is_null($purchased_course)){
      $purchased_course->delete();
    }
    return redirect()->back();
  }

}