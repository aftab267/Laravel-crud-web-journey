<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    public function showdata(){
        return view('show_data');
    }
    public function adddata(){
        return view('add_data');
    }
}
