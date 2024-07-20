<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
class ClasseController extends Controller
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
        return view('add_classe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request);

        $name = 'Art and Drawing';
        $capacity =33; 
        $price = 12;
        $isFulled = 1;
        $timeFrom = 1;
        $timeTo = 1;


        Classe::create([
            'name' => $name,
            'capacity' => $capacity,
            'price' => $price,
            'isFulled'=> 0,
            'timeFrom'=> $timeFrom,
            'timeTo'=> $timeTo
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
