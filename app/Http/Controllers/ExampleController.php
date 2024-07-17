<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    function login(){
        return view('login');
    }
    function contact(){
        return view('contact');
    }
    // function contact(Request $req) {
    //     print_r($req->input());
    // }
}
