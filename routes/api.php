<?php

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/list',function(){
   return User::all();
});

//Route::get('/students', function() {
//    return view('student.create');
//});
//Route::get('/students/find', 'StudentController@getStudentList');
