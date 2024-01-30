<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\AdminRegisterRequest;
class AdminLoginController extends Controller
{
    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function signin()
    {
        return view('admin.admin_sign_in');
    }

    public function showLoginForm()
    {
        return view('auth.admin_login');
    }
    public function stor(AdminRegisterRequest $request) 
    {
        // dd($request);
        $admin = Admin::create($request->validated());

        
        auth()->login($admin);
        return view('admin.dashboard')->with('success', "Account successfully registered.");
    }
    

    public function login(LoginRequest $request)
{
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $userProvider = Auth::createUserProvider('users');
    $companyProvider = Auth::createUserProvider('companies');
    $adminProvider = Auth::createUserProvider('admins');

    $user = $userProvider->retrieveByCredentials($credentials);
    $company = $companyProvider->retrieveByCredentials($credentials);
    $admin = $adminProvider->retrieveByCredentials($credentials);

    if ($user && $userProvider->validateCredentials($user, $credentials)) {
        Auth::guard('web')->login($user);
        return $this->authenticated($request, $user);
    } elseif ($company && $companyProvider->validateCredentials($company, $credentials)) {
        Auth::guard('companies')->login($company);
        return $this->authenticated($request, $company);
    } elseif ($admin && $adminProvider->validateCredentials($admin, $credentials)) {
        Auth::guard('admin')->login($admin);
        return $this->authenticated($request, $admin);
    }
    dd($request->all(), $credentials, Auth::guard('admin')->check());

    // If neither user nor company nor admin is found or credentials are invalid
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
        } elseif (Auth::guard('admin')->check()) {
            return '/admin/dashboard';
        }
    

         
        // Default redirect path
        return '/';
    }

}
// public function stor(Request $request)
    // {
    //     $request->validate([
    //         'username'=>'required',
    //         'email' => 'required|email|unique:admins', // Assuming your model is named Admin
    //         'password' => 'required|min:8,max:32',
    //     ]);

    //     $obj = new Admin();
    //     $obj->username = $request->username;
    //     $obj->email = $request->email;
    //     $obj->password = $request->password;
    //     $obj->save();

    //     if ($obj) {
    //         return view('auth.admin_login')->with('success', 'add user is successfully.');
    //     }
    // }

    // public function login()
    // {
    //     return view('admin.admin_login');
    // }

    // public function login(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required|min:8',
    //     ]);
    
    //     $credentials = $request->only('email', 'password');

    // if (auth('admin')->attempt($credentials, $request->filled('remember'))) {
    //     // Authentication passed...
    //     return redirect()->intended(route('admin.dashboard'));
    // }
    
    //     return $this->sendFailedLoginResponse($request);
    // }
    // protected function sendFailedLoginResponse(Request $request)
    // {
    //     return redirect()->back()
    //         ->withInput($request->only('email', 'remember'))
    //         ->withErrors(['email' => trans('auth.failed')]);
    // }


    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:8',
    //     ]);

    //     if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
    //         return redirect()->intended(route('admin.dashboard'));
    //     }

    //     return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);
    // }