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

    function submit(Request $req){
         dd($req->all());
         return $req['email'] . '<br>' . $req->pwd;
    }
    // function contact(Request $req) {
    //     print_r($req->input());
    // }
}
