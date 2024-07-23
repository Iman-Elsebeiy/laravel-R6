<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
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

        Car::create([
            //    'key' => 'value'
            'carTitle' => $request->carTitle,
            'description' => $request->description, 
            'price' => $request->price, 
            'published' => isset($request->published), 
        ]);
        return "Data added successfully"; 
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
        // return view('edit_car');
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
