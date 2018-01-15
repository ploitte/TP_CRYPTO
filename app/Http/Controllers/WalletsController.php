<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use CryptoModel;
use WalletModel;
use WalletRepo;
use UserModel;
use CryptoRepo;

class WalletsController extends Controller
{
    private $cryptoRepo;
    private $walletRepo;

    public function __construct(CryptoRepo $cryptoRepo, WalletRepo $walletRepo){
        $this->cryptoRepo = $cryptoRepo;
        $this->walletRepo = $walletRepo;
    }

    public function walletsviewing(Request $request){

        $user = Auth::user();
        $name = $request -> route() -> getName();
        $cryptos = $this->cryptoRepo->getAll();
        $walletsAuth = $this->walletRepo->getByAuth($user->id);

        $this->cryptoRepo->updateCurrentPrice();
            
        return view("pages.wallets", [
            "name" => $name,
            "user" => $user,
            "cryptos" => $cryptos,
            "wallets" => $walletsAuth
        ]);
    }

    public function newWalletForm(){


        return redirect()->route("wallet");
    }


}
