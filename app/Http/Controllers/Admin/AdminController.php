<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   Use AuthenticatesUsers;
    protected $redirectTo = 'admin/login';
   protected $username;
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
        $this->username = $this->findUsername();
    }
    public function login(Request $request)
    {
//        dd($request->all());
        $this->validateLogin($request);
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
//        dd($request->all());
        return $this->sendFailedLoginResponse($request);

    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect()->route('admin.login');
    }
    public function showLoginForm()
    {
        Auth::guard('admin');


        if(Auth::guard('admin')->check()) {
            return redirect()->route('student.index');
        }
        return view('admin.login.index');
    }
    public function findUsername()
    {
        $login = request()->input('login');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        request()->merge([$fieldType => $login]);

        return $fieldType;
    }
    public function username()
    {
        return $this->username;
    }
}
