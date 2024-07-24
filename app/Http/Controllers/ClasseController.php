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
        $classes = Classe::get();
        
        return view('classes', compact('classes'));
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

        // $name = 'Art and Drawing';
        // $capacity =33; 
        // $price = 12;
        // $isFulled = true;
        // $timeFrom = 1;
        // $timeTo = 1;
        $data = [
            'name' => $request->name,
            'capacity' => $request->capacity,
            'price' => $request->price,
            'isFulled'=> isset($request->isFulled),
            'timeFrom'=> $request->timeFrom,
            'timeTo'=> $request->timeTo 
        ];


        Classe::create($data);


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
        $classe = Classe::findOrFail($id);
        // dd($classe);
        return view('edit_classe', compact ('classe'));

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
