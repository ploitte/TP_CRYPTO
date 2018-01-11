<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletsController extends Controller
{
    public function walletsviewing(Request $request){
        $name = $request -> route() -> getName();

        return view("pages.wallets")->with('name', $name);
    }
}
