<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function defaultRedirect(Request $request){

        $name = $request->route()->getName();

        return view("auth.login")->with("name", $name);
    }

    public function logoutUser(Request $request){
        Auth::logout();
        return view("auth.login");
    }

}
