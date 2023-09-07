<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\LoginController;
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
    return view('home');
});
    Route::get('/index',function(){
        return view('index');
    })->middleware('isLoggedIn');
    
    
    Route::get('/login',[LoginController::class,'index'])->name('index-student');
    Route::post('/login',[LoginController::class,'login'])->name('login-student');
    
    Route::get('/register',[StudentController::class,'index'])->name('register.index');
    Route::post('/register',[StudentController::class,'store'])->name('store-customer');

//sir alreadylogged in wala middleware sbb pe dalna prega kya


    //Yes, But shortcut hai, Group banake daal skte hai

    // sir kal kya tha group aur guest wo kr du kya, wait // ye group kam nhi kr rhasir ye AUTH MIIDLE WARE PE TO NHI JAYEGA?
    // Dono alaga alag hai kya?ha sir to yahan pe AuthCheck middlware hona chaiye naha sir
    Route::group(['middleware' => 'isLoggedIn'],function () {
      
     
        
     
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
        Route::get('/logout',[LoginController::class,'logout'])->name('register.logout');
    });
  


