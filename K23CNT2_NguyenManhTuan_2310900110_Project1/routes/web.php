<?php
use App\Http\Controllers\NMT_LOAI_SAN_PHAMController;
use App\Http\Controllers\NMT_QUAN_TRIController;
use App\Http\Controllers\NMT_SAN_PHAMController;
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

Route::get('/admins/nmt-login',[NMT_QUAN_TRIController::class,'nmtLogin'])->name('admins.nmtLogin');     
Route::post('/admins/nmt-login',[NMT_QUAN_TRIController::class,'nmtLoginSubmit'])->name('admin.nmtLoginSubmit');

#admins - route
Route::get('/nmt-admins',function(){
    return view('nmtAdmins.index');
    });

Route::get('/nmt-admins/nmt-loai-san-pham',[NMT_LOAI_SAN_PHAMController::class,'nmtList'])
->name('nmtadmins.nmtloaisanpham');
Route::get('/nmt-admins/nmt-loai-san-pham/nmt-create',[NMT_LOAI_SAN_PHAMController::class,'nmtCreate'])
->name('nmtadmins.nmtloaisanpham.nmtcreate');
Route::post('/nmt-admins/nmt-loai-san-pham/nmt-create',[NMT_LOAI_SAN_PHAMController::class,'nmtCreateSubmit'])
->name('nmtadmins.nmtloaisanpham.nmtcreatesubmit');

#edit-- LOAI_SAN_PHAM
Route::get('/nmt-admins/nmt-loai-san-pham/nmt-edit/{id}',[NMT_LOAI_SAN_PHAMController::class,'nmtEdit'])
->name('nmtadmins.nmtloaisanpham.nmtedit');
Route::post('/nmt-admins/nmt-loai-san-pham/nmt-edit',[NMT_LOAI_SAN_PHAMController::class,'nmtEditSubmit'])
->name('nmtadmins.nmtloaisanpham.nmtEditSubmit');
//delete LOAI_SAN_PHAM
Route::get('/nmt-admins/nmt-loai-san-pham/nmt-delete/{id}',[NMT_LOAI_SAN_PHAMController::class,'nmtDelete'])
->name('nmtadmins.nmtloaisanpham.nmtDelete');

Route::get('/nmt-admins/nmt-san-pham',[NMT_SAN_PHAMController::class,'nmtList'])
->name('nmtadmins.nmtsanpham.nmtlist');

Route::get('/nmt-admins/nmt-san-pham/nmt-create',[NMT_SAN_PHAMController::class,'nmtCreate'])
->name('nmtadmins.nmtsanpham.nmtcreate');
Route::post('/nmt-admins/nmt-san-pham/nmt-create',[NMT_SAN_PHAMController::class,'nmtCreateSubmit'])
->name('nmtadmins.nmtsanpham.nmtcreatesubmit');

