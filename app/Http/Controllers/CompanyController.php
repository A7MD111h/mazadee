<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

            if ($category) {
                $subCategories = $category->sub_Category;
                $auctions = []; // Initialize the $auctions array

                foreach ($subCategories as $subCategory) {
                    // Merge the arrays for each subcategory into a single array
                    $auctions = array_merge($auctions, Auction::where('sub_category_id', $subCategory->id)
                        ->where('city', $company->city)
                        ->where('status', 'active')
                        ->get()
                        ->toArray());
                }

                return view('companyHome', compact('company', 'subCategories', 'auctions'));
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
        return view('bid-auction', compact('auction', 'company'));
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
                    } else {
                        return back()->with('error', 'Can\'t Save Your Bid, Try again later.');
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
}
