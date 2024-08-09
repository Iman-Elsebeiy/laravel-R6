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

    public function uploadform(){
        return view('upload');
    }
    public function upload(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        return 'Uploaded';
    }

    // public function fashionIndex() {
    //     return view('fashion_index');
    // }
}
