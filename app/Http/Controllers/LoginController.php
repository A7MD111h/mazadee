<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
// use AuthenticatesUsers;
class LoginController extends Controller
{

    
  
    public function show()
    {
        return view('auth.login');
    }

 
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
    
        $userProvider = Auth::createUserProvider('users');
        $companyProvider = Auth::createUserProvider('companies');
    
        $user = $userProvider->retrieveByCredentials($credentials);
        $company = $companyProvider->retrieveByCredentials($credentials);
    
        if ($user && $userProvider->validateCredentials($user, $credentials)) {
            Auth::guard('web')->login($user);
            return $this->authenticated($request, $user);
        } elseif ($company && $companyProvider->validateCredentials($company, $credentials)) {
            Auth::guard('companies')->login($company);
            return $this->authenticated($request, $company);
        }
    
        // If neither user nor company is found or credentials are invalid
        return redirect()->route('login.show')->withErrors(trans('auth.failed'));
    }
    
    

    protected function authenticated(Request $request, $user)
    {
        // Your custom logic after user authentication
        return redirect()->intended($this->redirectPath());

    }
    protected function redirectPath()
    {
        // Check the authenticated user type and redirect accordingly
        if (Auth::guard('web')->check()) {
            // Regular user
            return '/';
        } elseif (Auth::guard('companies')->check()) {
            // Company user
            return '/home';
        }

        // Default redirect path
        return '/';
    }
}
