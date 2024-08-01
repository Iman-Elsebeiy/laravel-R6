<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Http\RedirectResponse;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get data from Database
        // return view all cars data
        // sql---> select * from cars
        $cars = Car::get();
        
        return view('cars', compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_car');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);  
        
            $file_extension = $request->image->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'assets/images';
            $request->image->move($path, $file_name);
        

            $data['published'] = isset($request->published); 

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
        $car = Car::findOrFail($id);

        return view('car_details', compact('car'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);

        return view('edit_car', compact('car'));
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
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]); 
  
     $data['published'] = isset($request->published); 

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
           