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
        //
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
        // dd($request);
             $carTitle = 'BMW';
             $description ="TEST"; 
            // $price = 12;
            // $published = 1;
            // $carTitle => request() 'BMW';
            // $description => request()"TEST"; 
            $price = 12;
            $published = 1;



            Car::create([
                'carTitle' => $carTitle,
                'description' => $description,
                'price' => $price,
                'published'=> 0
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
