<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Student\StudentController;
use App\Http\Controllers\Admin\AdminController;
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
    return view('welcome');
});

Route::get('user/list', [UserController::class, 'index'])->name('user.list');

Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class,'login'])->name('admin.login');
Route::get('admin/logout', [AdminController::class,'logout'])->name('admin.logout');




Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function ($router) {
    $router->resource('/student', StudentController::class);
    $router->get('ajax', [StudentController::class, 'getData'])->name('student.ajax');
    $router->get('/student-select', [StudentController::class, 'getStudentList'])->name('student.select');
    $router->get('student/{id}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');

});





//    Route::resource('/student', StudentController::class);
//    Route::get('ajax', [StudentController::class, 'getData'])->name('student.ajax');
//    Route::get('student/{id}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');

