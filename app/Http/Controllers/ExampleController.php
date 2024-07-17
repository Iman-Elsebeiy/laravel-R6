<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    function login(){
        return'logined';
    }
    function submit(){
        return view('done');
    }
    function contact(Request $req) {
        print_r($req->input());
    }
}
