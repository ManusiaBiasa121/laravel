<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContact extends Controller
{
    public function index() {
        return view('/contactwebkola' , [ "title" => "Contact"]);
    }


    public function store(){
        
    }
}

