<?php
use App\Http\Controllers\NmtLoginController;
use App\Http\Controllers\NmtSinhVienController;
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

#SinhVien - Model
Route::get('/nmt-sinhviens',[NmtSinhVienController::class,'nmtList'])->name('NmtSinhVien.nmtList');