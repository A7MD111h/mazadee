<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;



class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $category = Category::all(); 
        // dd($category);
        // return view('admin.layout.Categoriesview', ['category' => $category]);
        $category = Category::all();
        return view('admin.layout.Categoriesview', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layout.CategoriesAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //photo category_Name
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
            'name' => 'required ',
        ]);
        $ext = $request->file('photo')->extension();
        $final_name = time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $obj = new Category();
        $obj->photo = $final_name;
        $obj->name = $request->name;
        $obj->save();
        if ($obj) {
            return redirect()->route('view_Categories')->with('success', 'Add Category is successfully.');
            // return $request->input();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Category $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $categories ,$id)
    {
        // $categories_data = categories::where('id', $id)->first();
        // return route('admin_category_edit', ['id' => $categories_data]);
        $categories_data = Category::where('id', $id)->first();
        return view('admin.layout.CategoriesEdit', compact('categories_data'));
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $obj = Category::where('id',$id)->first();
            // dd($obj);
            if($request->hasFile('photo')) {
                $request->validate([
                    // 'photo' => 'image'
                    'photo' => 'image|mimes:jpg,jpeg,png,gif'
                ]);
                unlink(public_path('uploads/'.$obj->photo));
                $ext = $request->file('photo')->extension();
                $final_name = time().'.'.$ext;
                $request->file('photo')->move(public_path('uploads/'),$final_name);
                $obj->photo = $final_name;
            }
            
            // $obj->photo = $final_name;
            $obj->name = $request->name;
            $obj->update();
            if ($obj) {
                return redirect()->route('view_Categories')->with('success', 'Category is updated successfully.');
            }
        } 
        catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $categories, $id)
    {
        Category::findorFail($id)->delete();

        return redirect()->back()->with('success', 'Category is deleted successfully.');
    }
    public function destroyPermanently($id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->forceDelete();
        } else {
            return redirect()->back()->with('failed ', 'Failed to delete Category.');
        }
        
        return redirect()->back()->with('success', 'Category is deleted permanently.');
    }

}
