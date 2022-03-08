<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

   function list()
   {
       return user::all();
   }
   public function index()
   {
//       $data = [
//           'name' => 'superadmin123',
//           'email' => 'super123@gmail.com',
//           'password' => Hash::make('password'),
//
//       ];
//
       return User::all();
   }
}
