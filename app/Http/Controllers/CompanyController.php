<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PhoneEditRequest;
use App\Http\Requests\CompanyEditRequest;
use App\Http\Requests\PasswordEditRequest;
use App\Http\Requests\CommercialEditRequest;
use App\Http\Requests\EmailAddressEditRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    public function homePage()
    {
        $company_id = Auth::id();
        $company = Company::find($company_id);
        
        if ($company) {
            $category = $company->category;
            // dd($category);
            if ($category) {
                $subCategories = $category->sub_Category;
                // $auctions = []; 
                // dd($subCategories);
                foreach ($subCategories as $subCategory) {
                    $auctions[] = Auction::where('sub_category_id', $subCategory->id)->where('city', $company->city)->where('status', 'active')->get();
                    // $auctions = array_merge($auctions, Auction::where('sub_category_id', $subCategory->id)
                    //     ->where('city', $company->city)
                    //     ->where('status', 'active')
                    //     ->get()
                    //     ->toArray());
                }
                    // dd($auctions);
                return view('company.companyHome', compact('company', 'subCategories', 'auctions'));
            } else {
                return 'errorrr';
            }
        } else {
            return 'error';
        }




        // if ($company) {
        //     // Eager load the category and its subcategories
        //     $company->load('category.sub_Category');

        //     $category = $company->category;

        //     if ($category) {
        //         // Collect subcategory IDs to use in a single query
        //         $subCategoryIds = $category->sub_Category->pluck('id')->toArray();

        //         // Eager load auctions for the specified subcategories and city
        //         $auctions = Auction::whereIn('sub_category_id', $subCategoryIds)
        //             ->where('city', $company->city)
        //             ->get();

        //         return view('companyHome', compact('company', 'auctions'));
        //     } else {
        //         return 'Error: No category associated with this company.';
        //     }
        // } else {
        //     return 'Error: User not authenticated.';
        // }
    }

    public function submitBid($id)
    {
        $auction = Auction::find($id);
        // dd($auction);
        $company = Company::find(Auth::id());
        // dd($company);
        return view('company.bid-auction', compact('auction', 'company'));
    }

    public function addbid($id, Request $request)
    {
        $request->validate([
            'company_price' => 'required|numeric|min:0'
        ]);
        $company = Company::find(Auth::id());
        if ($company) {
            $auction = Auction::find($id);
            if ($auction) {
                if ($auction->company_price == NULL) {
                    // $obj=$auction->budjet;
                    // dd($obj);
                    if (floatval($request->input('company_price')) < $auction->budjet){
                        $auction->company_price = $request->input('company_price');
                        $auction->company_id = $company->id;
                    
                    
                        if ($auction->update()) {
                            $company->bid_count=$company->bid_count + 1;
                            if($company->update())
                            {
                                return back()->with('success', 'Bid Save Successfully.');
                            }else{
                                return back()->with('error', 'Error increment bid count');
                            }
                        }} else {
                            return back()->with('error',  'Your bid is more than the last price.');//'Can\'t Save Your Bid, Try again later..
                        }
                    
                } else {
                    // dd(gettype($auction->company_price));
                    if (floatval($request->input('company_price')) < $auction->company_price) {
                        $auction->company_price = $request->input('company_price');
                        $auction->company_id = $company->id;
                        if ($auction->update()) {
                            return back()->with('success', 'Bid Save Successfully.');
                        } else {
                            return back()->with('error', 'Can\'t Save Your Bid, Try again later..');
                        }
                    } else {
                        return back()->with('error', 'Your bid is more than the last price.');
                    }
                }
            } else {
                return back()->with('error', 'Auction not found.');
            }
        }
    }

    public function CompanyProfile()
    {
        $Company_id=Auth::id();
        $Company=Company::find($Company_id);
        return view('company.company-profile', compact('Company'));
    }

    
    public function commercialEdit(CommercialEditRequest $request)
    {
        $Company_id=Auth::id();
        $Company=Company::find($Company_id);
        $Company->commercial_register=$request->commercial_register;
        if($Company->update()){
            return back()->with('success', 'Phone Number updated Successfully.');    
        }else{
            return back()->with('error', "Can't update your Phone Number.");    
        }
    }
    public function companyProfileEdit(CompanyEditRequest $request)
    {
        $Company_id=Auth::id();
        $Company=Company::find($Company_id);
        $Company->name=$request->name;
        $Company->username=$request->username;
        $Company->email=$request->email;
        $Company->phone=$request->phone;
        $Company->national_number=$request->national_number;
        $Company->address=$request->address;
        $Company->city=$request->city;
        if($Company->update()){
            return back()->with('success', 'Phone Number updated Successfully.');    
        }else{
            return back()->with('error', "Can't update your Phone Number.");    
        }
    }
    public function passwordEdit(PasswordEditRequest $request)
    {
        $Company_id=Auth::id();
        $Company=Company::find($Company_id);
        if (password_verify($request->input('oldPassword'), $Company->password)) {
            $Company->password = $request->input('password');
            if($Company->update())
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

    public function companyWinningBids(Request $request)
    {
        
        // return view('company.winning-bids');
        // return view('company.winning-bids',compact('user', 'oldAuctions', 'activeAuctions', 'activeAuctionsNum'));
        // return back()->with('error', 'Old Password incorrect!!');

        $company_id=Auth::id();
        $company=Company::find($company_id);
        $oldAuctions = $company->auction()->where('status','!=','active')->get();
        $activeAuctions = $company->auction()->where('status','active')->get();
        
        // $data['page_title']="My Winning Bids";
        return view('company.winning-bids',compact('company', 'oldAuctions', 'activeAuctions'));
    }
    public function activity_profile(Request $request)
    {
        $company_id=Auth::id();
        $company=Company::find($company_id);
        $oldAuctions = $company->auction()->where('status','!=','active')->get();
        $activeAuctions = $company->auction()->where('status','active')->get();
        if($activeAuctions->count()>0){
            $activeAuctionsNum=$activeAuctions->count();
        }else{
            $activeAuctionsNum=0;
        }
        if($oldAuctions->count()>0){
            $oldAuctionsNum=$oldAuctions->count();
        }else{
            $oldAuctionsNum=0;
        }
        // dd($oldAuctionsNum);
        
        return view('company.profile',compact('company', 'oldAuctions', 'activeAuctions', 'activeAuctionsNum', 'oldAuctionsNum'))->with('error', 'Old Password incorrect!!');
        
    }


}
