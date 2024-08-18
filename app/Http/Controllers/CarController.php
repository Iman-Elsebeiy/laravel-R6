<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Traits\Common;

class CarController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get data from Database
        // return view all cars data
        // sql---> select * from cars
       
        // $data = DB::table('cars')
        // ->join('categories', 'category.id', '=', 'cars.category_id')
        // ->select('category.category', 'categories.*')
        // ->where('categorys.id', '=', 'cars.category_id')
        // ->get();
       
        $cars = Car::with('category')->get();
        // $categories = Category::select('id','category_name')->get();

        return view('cars', compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::select('id','category_name')->get();
        // dd($categories);
        // return view('add_car');
        return view('add_car', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // if(isset($request->published)){
        //     $publ = true;
        // }else{   
        //     $publ = false;
        // }
        // dd($request);
            //  $carTitle = 'BMW';
            //  $description ="TEST"; 
            // $price = 12;
            // $published = 1;
        // $data = [
        //     //    'key' => 'value'
        //     'carTitle' => $request->carTitle,
        //     'description' => $request->description, 
        //     'price' => $request->price, 
        //     'published' => isset($request->$published), 
        // ];
         $data = $request->validate([
            'carTitle' => 'required|string',
            'description' => 'required|string|max:1000',
            'price' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);  
        

            $data['published'] = isset($request->published); 
            $data['image'] = $this->uploadFile($request->image, 'assets/images/car/'); 

        Car::create($data
            //    'key' => 'value'
            );
        // return "Data added successfully";
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // $car = Car::findOrFail($id);
        // relation name not table
        $car = Car::with('category')->findOrFail($id);
        //  dd($car);
        return view('car_details', compact('car'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        $categories = Category::select('id','category_name')->get();
        return view('edit_car', compact('car','categories'));
    }
    /**
     * Show the deleted resource from storage.
     */
    public function showDeleted(){

        $cars = Car::onlyTrashed()->get();
        
        return view('trashed_cars', compact('cars'));
    
}
    /**
     * restore the trashed resource from storage.
     */
    public function restore(string $id){

        Car::where('id', $id)->restore();
         return redirect()->route('cars.showDeleted');
        
    
}  
    /**
     * force delete resource from storage.
     */
    public function forceDeleted(string $id){

        Car::where('id', $id)->forceDelete();
        return redirect()->route('cars.showDeleted');

        
    
}  

    /**
     * Delete the specified resource from storage.
     */ 
    public function destroy(Request $request): RedirectResponse
    {
       $id = $request->id;
       Car::where('id', $id)->delete();
       return redirect('cars');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request, $id);

            $data = $request->validate([
                'carTitle' => 'required|string',
                'description' => 'required|string|max:1000',
                'price' => 'required',
                'category_id' => 'required|exists:categories,id',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]); 
  
     $data['published'] = isset($request->published);
     
     if ($request->hasFile('image')) {
        $data['image'] = $this->uploadFile($request->image, 'assets/images/car/');
    }
        // 'carTitle' => $request->carTitle,
        //     'description' => $request->description, 
        //     'price' => $request->price, 
        //     'published' => isset($request->published)
        
        
        Car::where('id', $id)->update($data);
          
        return redirect()->route('cars.index');


    }
    
}
    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //soft delete
    //     Car::where('id', $id)->delete();
    //     return redirect()->route('cars.index');

    // }
           