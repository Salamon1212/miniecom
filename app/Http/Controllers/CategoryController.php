<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        $cat_data = Category::get();
        $subcat_data = SubCategory::get();
        $product_data = Product::get();
        // if($user)
        // $address = Address::where('id',$user->id)->first();


        return view('front.dashboard',compact(['cat_data','subcat_data','product_data',]));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_img' => 'required',
        ]);

        $file = $request->file('category_img');
        $fileName = $file->getClientOriginalName();
        $category = Category::create([
            'category_name' => $request->get('category_name'),
            'category_img' => $fileName,
        ]);
        $filepath = $file->storeAs('uploads',$fileName, 'public');
        if($category){
            return redirect('add/category')->with('success','successfully added the category');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }

}
