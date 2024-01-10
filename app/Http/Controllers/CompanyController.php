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
        // dd($company_id);
        $company = Company::find($company_id);
        // dd($company);
        if ($company) {
            $category = $company->category;
            // dd($category);
            if ($category) {
                $subCategories=$category->sub_Category;
                // dd($subCategories);
                foreach($subCategories as $subCategory){
                    $auctions[]=Auction::where('sub_category_id',$subCategory->id)->where('city',$company->city)->get();
                }
                // dd($auctions);
                return view('companyHome', compact('company','subCategories','auctions'));
            } else {
                return 'error';
            }
        } else {
            return 'error';
        }
    }
}
