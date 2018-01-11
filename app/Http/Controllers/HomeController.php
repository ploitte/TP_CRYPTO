<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeviewing(Request $request){
        $name = $request->route()->getName();
        
        return view("pages.home")->with("name", $name);
    }
}
