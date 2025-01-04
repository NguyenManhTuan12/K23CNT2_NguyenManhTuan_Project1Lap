<?php
use App\Http\Controllers\TvcAccountController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return "<h1>Helo World,I'm Mạnh Tuấn </h1";
});

#redirect
Route::redirect('/here','/three');


Route::get('/greeting', function () {
  return "<h1>Redirect to three </h1";
});

#Router return view 
Route::get('/manh-tuan',function(){
    return view('manhtuan');
});

#Router parameter 
Route::get('/devmaster/{id}',function($id){
    return "<h1> Devmaster ".$id ."</h1>";
});

#Optional parameter
Route::get('/dev/{name?}',function($name="Mạnh Tuấn"){
    return "<h1> Xin chào  ".$name  ."</h1>";
});


Route::get ('/tvc-account',[TvcAccountController::class,'index'])->name('tvcAccount.index');


Route::get ('/tvc-account-create',[TvcAccountController::class,'create']);