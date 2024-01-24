<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ControllerContact extends Controller
{
    public function index() {
        $data = DB::table('pesan')->get();
        return view('/contactwebkola' , [ 
            "title" => "Contact" ,
            "items" => $data
    ]);
    }


    public function store(Request $request){
        
    }
}

