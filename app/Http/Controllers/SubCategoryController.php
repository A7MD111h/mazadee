<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sub_Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $subCategories=Sub_Category::where('category_id',$id)->get();
        $category=Category::find($id);
        return view('auction',compact('subCategories','category'));
    }
    
    public function view()
    {
        $sub_category = Sub_Category::all(); 
        $test = Sub_Category::find(1);
        // $categoryId = $test->category->category_id;
        // $categoryName = $test->category->category_Name;
        // dd($categoryName);
        return view('admin.layout.sub_category_view', compact('sub_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //sub_category_Add
        $category = Category::get();
        return view('admin.layout.sub_category_Add', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
            'name' => 'required ',
            'category_id' => 'required ',
        ]);
        $ext = $request->file('photo')->extension();
        $final_name = time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $obj = new Sub_Category();
        $obj->photo = $final_name;
        $obj->name = $request->name;
        $obj->category_id = $request->category_id;
        
        
        // dd($obj);
        $obj->save();
        if ($obj) {
            return redirect()->route('view_Sub_Category')->with('success', 'Add Sub Category is successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Sub_Category $sub_Category )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Sub_Category $sub_Category,$id)
    {
        $Sub_Category_data = Sub_Category::where('id', $id)->first();
        $category = Category::all();
        return view('admin.layout.sub_category_Edit', compact('Sub_Category_data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sub_Category $sub_Category, $id)
    {
        try {
            $obj = Sub_Category::where('id',$id)->first();

            if($request->hasFile('photo')) {
                $request->validate([
                
                    'photo' => 'image|mimes:jpg,jpeg,png,gif'
                ]);
                unlink(public_path('uploads/'.$obj->photo));
                $ext = $request->file('photo')->extension();
                $final_name = time().'.'.$ext;
                $request->file('photo')->move(public_path('uploads/'),$final_name);
                $obj->photo = $final_name;
            }
            

            $obj->name = $request->name;
            $obj->category_id = $request->category_id;
            $obj->update();
            if ($obj) {
                return redirect()->route('view_Sub_Category')->with('success', 'product is updated successfully.');
            }
        } 
        catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub_Category $Sub_Category, $id)
    {
        //public function destroy(Category $categories)
    
        Sub_Category::findorFail($id)->delete();

        return redirect()->back()->with('success', 'Category is deleted successfully.');
    
    }
}
