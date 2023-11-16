<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $request->validate([
            'subcategory_id' => 'required',
            'subcategory_name' => 'required',
            'subcategory_img' => 'required',
        ]);

        $subCategory = SubCategory::create([
            'subcategory_id' => $request->get('subcategory_id'),
            'subcategory_name' => $request->get('subcategory_name'),
            'subcategory_img' => $request->get('subcategory_img'),


        ]);
        if($subCategory){
            return redirect('add/subcategory')->with('success','successfully added the subcategory');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
