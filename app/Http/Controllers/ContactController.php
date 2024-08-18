<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
            return view('contact');
    }



    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

          // Email data
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Send email
        Mail::send([], [], function ($message) use ($data) {
            $message->to('test@test.com')
                ->subject($data['subject'])
                ->setBody(
                    "Name: {$data['name']}" .
                    "Email: {$data['email']}" .
                    "Message:{$data['message']}",
                    'text/plain'
                );
        });

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
