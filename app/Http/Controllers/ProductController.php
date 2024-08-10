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
         $products = Product::orderBy('created_at','desc')->take(3)->get();
         return view('fashion_index', compact('products'));
        // return view('fashion_index');
    }

    public function product_index()
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
            'productname' =>  'required|string',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]); 

          $data['published'] = isset($request->published); 
          $data['image'] = $this->uploadFile($request->image, 'assets/images'); 

         Product::create($data);
        //    return "Data added successfully";
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Product::findOrFail($id);

        return view('product_details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Product::findOrFail($id);

        return view('edit_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'productname' =>  'required|string',
            'description' => 'required|string|max:1000',
            'price' => 'required|decimal:1',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $data['published'] = isset($request->published);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images/product');
        }
        //  dd($data);
        Product::where('id', $id)->update($data);
        // return"updated";
        return redirect()->route('products.proindex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        //
        $id = $request->id;
        Product::where('id', $id)->delete();
        return redirect('products');
    }

    /**
     * force delete resource from storage.
     */
    public function forceDeleted(string $id){

        Product::where('id', $id)->forceDelete();
        return redirect()->route('products.showDeleted');       
    } 
    
    /**
     * Show the deleted resource from storage.
     */
    public function showDeleted(){

        $products = Product::onlyTrashed()->get();
        
        return view('trashed_products', compact('products'));
    
    }
     /**
     * restore the trashed resource from storage.
     */
    public function restore(string $id){

        Product::where('id', $id)->restore();
         return redirect()->route('products.showDeleted');
    }
}
