<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoremController extends Controller
{

    public function index(){
        return view("lorem.index");
    }
}
