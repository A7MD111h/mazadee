<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Sub_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddAuctionRequest;
use App\Models\Company;
use App\Models\User;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $subCategory=Sub_Category::find($id);
        return view("auction-details",compact("subCategory"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( AddAuctionRequest $request)
    {
        // dd($request);
        $userId = Auth::id();
        // dd($userId);
        $subCategory = Sub_Category::where('name',$request->name)->first();
        // dd($subCategory->category_id);
        $auction=Auction::create([
            "user_id"=> $userId,
            "sub_category_id"=> $subCategory->id,
            "quality"=> $request->quality,
            "budjet"=> $request->budjet,
            "city"=> $request->city,
            "quantity"=> $request->quantity,
            "description"=> $request->description,
            'code' => null,
        ]);
        // dd($auction);
        if($auction){
            return redirect()->back()->with('success', 'Auction start Successfully.');
        }else{
            return redirect()->back()->with('error', 'Failed to start Auction.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function showNotification($id)
    {
        $auction=Auction::find($id);
        $notificationId=DB::table('notifications')->where('data->auction_id',$id)->where('notifiable_type','App\Models\User')->pluck('id');
        $updateNotification=DB::table('notifications')->where('id',$notificationId)->update(['read_at'=>now()]);
        return view('viewNotification',compact('auction'));
    }

    public function markAsReadNotification(){
        $user=User::find(Auth::User()->id);
        foreach($user->unreadNotifications as $notification){
            $notification->markAsRead();
        }
        return redirect()->back();
    }

    public function markAsReadNotificationCompany(){
        $company=Company::find(Auth::guard('companies')->user()->id);
        // dd($user);
        foreach($company->unreadNotifications as $notification){
            $notification->markAsRead();
        }
        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit(Auction $auction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auction $auction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auction $auction)
    {
        //
    }
    public function cancelAuction($id)
    {
        $auction= Auction::find($id);
        $auction->status='canceled';
        $auction->update();
        return back()->with('success', 'Auction canceled successfully.');    
    }
    public function endAuction($id)
    {
        $auction= Auction::find($id);
        $auction->status='pending';
        $auction->update();
        return back()->with('success', 'Auction ended successfully.');    
    }
}
