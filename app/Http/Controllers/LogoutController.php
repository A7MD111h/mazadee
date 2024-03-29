<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        // Session::flush();
        
        // Auth::logout();
        auth()->guard('web')->logout();
        return redirect('/');
    }
    public function logout_company()
    {
        // Session::flush();
        
        // Auth::logout();
        auth()->guard('companies')->logout();
        return redirect('/');
    }
    public function logout_admin()
    {
        // Session::flush();
        
        // Auth::logout();
        auth()->guard('admin')->logout();
        return redirect('/');
    }
}