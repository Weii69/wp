<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //
    public function homePage(){

        return view('homePage');
    }

    public function addPage(){

        return view('addPage');
    }
}
