<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profilviewing(Request $request){
        $name = $request->route()->getName();
        
        return view("pages.profil")->with("name", $name);
    }
}
