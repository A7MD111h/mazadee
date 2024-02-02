<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\PhoneEditRequest;
use App\Http\Requests\PasswordEditRequest;
use App\Http\Requests\EmailAddressEditRequest;
use App\Http\Requests\ProfilePictureEditRequest;
use App\Http\Requests\personalDetailsEditRequest;

class UserController extends Controller
{
    public function profilePages()
    {
        $user_id=Auth::id();
        $user=User::find($user_id);
        $oldAuctions = $user->auction()->where('status','!=','active')->get();
        $activeAuctions = $user->auction()->where('status','active')->get();
        if($activeAuctions->count()>0){
            $activeAuctionsNum=$activeAuctions->count();
        }else{
            $activeAuctionsNum=0;
        }
        return view('my-account-bids',compact('user', 'oldAuctions', 'activeAuctions', 'activeAuctionsNum'));
    }

    public function personalProfile()
    {
        $user_id=Auth::id();
        $user=User::find($user_id);
        return view('personal-profile', compact('user'));
    }

    public function personalDetailsEdit(personalDetailsEditRequest $request)
    {
        $user_id=Auth::id();
        $user=User::find($user_id);
        $user->fname=$request->fname;
        $user->lname=$request->lname;
        $user->username=$request->username;
        if($user->update()){
            return back()->with('success', 'Personal Detailes updated Successfully.');    
        }else{
            return back()->with('error', "Can't update your Personal Detailes.");    
        }
    }
    
    public function emailAddressEdit(EmailAddressEditRequest $request)
    {
        $user_id=Auth::id();
        $user=User::find($user_id);
        $user->email=$request->email;
        if($user->update()){
            return back()->with('success', 'Email Address updated Successfully.');    
        }else{
            return back()->with('error', "Can't update your Email Address.");    
        }
    }

    public function phoneEdit(PhoneEditRequest $request)
    {
        $user_id=Auth::id();
        $user=User::find($user_id);
        $user->phone=$request->phone;
        if($user->update()){
            return back()->with('success', 'Phone Number updated Successfully.');    
        }else{
            return back()->with('error', "Can't update your Phone Number.");    
        }
    }

    public function passwordEdit(PasswordEditRequest $request)
    {
        $user_id=Auth::id();
        $user=User::find($user_id);
        if (password_verify($request->input('oldPassword'), $user->password)) {
            $user->password = $request->input('password');
            if($user->update())
            {
                return back()->with('success', 'Password updated successfully');
            }
            else{
                return back()->with('error', "Can't update your Password.");
            }
        } else {
            return back()->with('error', 'Old Password incorrect!!');
        }
    }

    public function profilePicEdit(ProfilePictureEditRequest $request)
    {
        $user_id=Auth::id();
        $user=User::find($user_id);
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images', 'public');
            $user->photo=$photoPath;
            if($user->update()){
                return back()->with('success', 'Profile Picture updated Successfully.');    
            }else{
                return back()->with('error', "Can't update your Profile Picture.");    
            }
        }else{
            return back()->with('error', "Can't update your Profile Picture....");    
        }
    }

    public function orderDetails(Request $request, $id)
    {
        $auction = Auction::where('id', $id)->first();
        return view('auction-done-details', compact('auction' ));
        
        
    }


}
