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

Route::get("/", array(
    "as" => "profil",
    "uses" => "Controller@defaultRedirect"
));

Route::get("/home", array(
    "as" => "home",
    "uses" => "HomeController@homeViewing"
))->middleware("auth");

Route::get("/wallets", array(
    "as" => "wallets",
    "uses" => "WalletsController@walletsViewing"
))->middleware("auth");

Route::get("/orders", array(
    "as" => "orders",
    "uses" => "OrdersController@ordersViewing"
))->middleware("auth");

Route::get("/profil", array(
    "as" => "profil",
    "uses" => "ProfilController@profilViewing"
))->middleware("auth");


Route::get("/logout",array(
    "as" => "logout",
    "uses" =>"Controller@logoutUser"
));


Route::post("/newWallet", array(
    "as" => "newWallet",
    "uses" => "WalletsController@newWalletService"
));

Auth::routes();

