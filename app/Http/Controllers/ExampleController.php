<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
   public function login(){
        return view('login');
    }
  
//1. contact us page
    function contact(){
        return view('contact');
    }
//2.request ... method
    function submit(Request $req){
        //  dd($req->all());
         return $req['name'] . '<br>' .$req['email'] . '<br>' .$req['subject'] . '<br>' .$req['message'] . $req->pwd;
    }
    // function submit(Request $req) {
    //     print_r($req->input());
    // }
}
