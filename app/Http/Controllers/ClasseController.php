<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use Illuminate\Http\RedirectResponse;

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

        // return "Data added successfully";
        return redirect()->route('classes.index');
 
    } 

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $classe = Classe::findOrFail($id);
        return view('classe_details', compact('classe'));
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
     * Delete the specified resource from storage.
     */ 
    public function destroy(Request $request): RedirectResponse
    {
       $id = $request->id;
       Classe::where('id', $id)->delete();
       return redirect('classes');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request, $id);
        $data = [
            'name' => $request->name,
            'capacity' => $request->capacity,
            'price' => $request->price,
            'isFulled'=> isset($request->isFulled),
            'timeFrom'=> $request->timeFrom,
            'timeTo'=> $request->timeTo 
        ];
        Classe::where('id', $id)->update($data);
        // return"updated";
        return redirect()->route('classes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     Classe::where('id', $id)->delete();
    //     return redirect()->route('classes.index');


    // }

    /**
     * Show the deleted resource from storage.
     */
    public function showDeleted(){

        $classes = Classe::onlyTrashed()->get();
        
        return view('trashed_Classes', compact('classes'));
    
}
}
