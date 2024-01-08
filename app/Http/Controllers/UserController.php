<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profilePages(){
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
}
