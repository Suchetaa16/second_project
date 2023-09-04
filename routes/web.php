<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PurchaseController;
use App\Models\Student;
use App\Models\Purchased_course;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
 // return view('index');
//};
Route::get('/',function(){
    return view('index');
});
Route::get('/register',[StudentController::class,'index'])->name('register.index');
Route::post('/register',[StudentController::class,'store'])->name('store-customer');
Route::get('/purchase',[PurchaseController::class,'index'])->name('index-purchase');
Route::post('/purchase',[PurchaseController::class,'store'])->name('store-purchase');
Route::get('/student/view',[StudentController::class,'list'])->name('student-view');
Route::get('/student/delete/{id}',[StudentController::class,'delete'])->name('student-delete');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student-edit'); 
Route::post('/student/update/{id}',[StudentController::class,'update'])->name('student-update');

Route::get('/purchase/view',[PurchaseController::class,'view'])->name('purchase.view');
Route::get('/purchase/delete/{id}',[PurchaseController::class,'delete'])->name('purchase.delete');
Route::get('/purchase/edit/{id}',[PurchaseController::class,'edit'])->name('purchase-edit'); 
Route::post('/purchase/update/{id}',[PurchaseController::class,'update'])->name('purchase-update');

