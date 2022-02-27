<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
  
Route::get('demo',function(){
    return view('new');
});


//check Login &  regsister
Route::get('/checklogin',function(){
    return view('loginstatus');
});
Route::get('/CheckRegsiter',function(){
    return view('regsitercheck');
});


//client Controller
Route::get('/client',[ClientController::class,'index']);
Route::get('/createClient',[ClientController::class,'create']);
Route::post('/storeClient',[ClientController::class,'store']);

//Login Client
Route::get('/loginc',[ClientController::class,'login']);
Route::get('/Logoutc',[ClientController::class,'Logout']);
Route::post('/postclientlogin',[ClientController::class,'PostLogin']);

//Profile Controller
Route::get('/p/create',[ProfilesController::class,'create']);
Route::post('/p/post',[ProfilesController::class,'store']);
Route::get('/p',[ProfilesController::class,'index']);
Route::get('profilepage/{id}', [ProfilesController::class,'ProfileDetail']);
Route::get('/ShowProfile',[ProfilesController::class,'ShowProfile']);


//Theme Controller
Route::get('/aboutus',[ThemeController::class,'About']);
Route::get('/contactus',[ThemeController::class,'Contact']);
Route::get('/news',[ThemeController::class,'News']);
Route::get('/cases',[ThemeController::class,'Case']);



//Appointment Controller
Route::get('/create/appointment/{id}',[AppointmentsController::class,'create']);
Route::post('/post/appointment',[AppointmentsController::class,'store']);
Route::get('/appointment',[AppointmentsController::class,'index']);
Route::get('/approvedappoint/{id}',[AppointmentsController::class,'approved']);
Route::get('/cancelappoint/{id}',[AppointmentsController::class,'Cancel']);
Route::get('/showappointment',[AppointmentsController::class,'ShowAppointment']);


//Admin Controller
Route::get('/AdminLogin',[AdminController::class,'Login']);
Route::post('/PostAdminLogin',[AdminController::class,'PostLogin']);
Route::get('/AdminDashboard',[AdminController::class,'Index']);
Route::get('/LogoutAdmin',[AdminController::class,'Logout']);




//User Controller
Route::get('/showlawyer',[UserController::class,'index']);





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
