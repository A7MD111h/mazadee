<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\CompanyRegRequest;
use App\Models\Company;

class RegisterController extends Controller
{
    
    public function show()
    {
        $categories=Category::all();
        return view('auth.register',compact('categories'));
    }
    // 
    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    
    public function register(RegisterRequest $request) 
    {
        // dd($request);
        $user = User::create($request->validated());

        
        auth()->login($user);
        return redirect('/')->with('success', "Account successfully registered.");
    }

    public function company_register(CompanyRegRequest $request)
    {
        
        if ($request->hasFile('commercial_register')) {
        $file = $request->file('commercial_register');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();

        // Store the file in the 'uploads' directory within the 'public' disk
        $file->storeAs('storage', $fileName, 'public');
    
            $company=Company::create([
                "name"=> $request->name,
                "username"=> $request->username,
                "email"=> $request->email,
                "password"=> $request->password,
                "phone"=> $request->phone,
                "city"=> $request->city,
                "address"=> $request->address,
                "national_number"=> $request->national_number,
                "category_id"=> $request->category_id,
                "commercial_register"=> $fileName,
            ]);
            if($company){
                // auth()->login($company);
                return redirect('/home')->with('success', "Account successfully registered.");
            }
        }
    }
}