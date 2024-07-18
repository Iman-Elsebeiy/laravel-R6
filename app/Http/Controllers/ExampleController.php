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
        //  dd($req->all());
         return $req['name'] . '<br>' .$req['email'] . '<br>' .$req['subject'] . '<br>' .$req['message'] . $req->pwd;
    }
    // function submit(Request $req) {
    //     print_r($req->input());
    // }
}
