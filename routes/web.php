<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get("/home", array(
    "as" => "home",
    "uses" => "HomeController@homeViewing"
));

Route::get("/wallets", array(
    "as" => "wallets",
    "uses" => "WalletsController@walletsViewing"
));

Route::get("/orders", array(
    "as" => "orders",
    "uses" => "OrdersController@ordersViewing"
));

Route::get("/profil", array(
    "as" => "profil",
    "uses" => "ProfilController@profilViewing"
));

