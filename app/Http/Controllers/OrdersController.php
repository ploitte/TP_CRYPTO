<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function ordersviewing(Request $request){
        $name = $request->route()->getName();
        
        return view("pages.orders")->with("name", $name);
    }
}
