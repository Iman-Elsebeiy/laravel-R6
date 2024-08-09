<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use App\Traits\Common;

class ProductController extends Controller
{
    use Common;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $products = Product::get();
         return view('products', compact('products'));
        // return view('fashion_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('add_product');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            //  dd($request)
        $data = $request->validate([
            'productName' =>  'required|string',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]); 

          $data['published'] = isset($request->published); 
          $data['image'] = $this->uploadFile($request->image, 'assets/images'); 

         Product::create();
           return "Data added successfully";
        // return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
