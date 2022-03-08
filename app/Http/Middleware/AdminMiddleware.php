<?php

namespace App\Http\Middleware;
use App\Http\Controllers\Admin\AdminController;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    protected $login;

    function __construct(AdminController $login)
    {
        Auth::shouldUse('admin');
        $this->login = $login;
    }
    public function handle(Request $request, Closure $next)
    {
        Auth::guard('admin');

        if(!Auth::guard('admin')->check()) {
            if (!strstr($request->url(), 'login')) {
                return redirect()->route('admin.login');
            }
        }
        return $next($request);
    }
}
