<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\WalletRequest;
use Illuminate\Support\Facades\Validator;
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


    public function newWalletService(WalletRequest $request){

        $user = Auth::user();
        $r = $request->input("wallet");

        $this->walletRepo->createWallet(array(
            "user_id" => $user->id,
            "wallet" => $r,
            "funds" => "0.00000000",
            "name" => "BTC"
        ));

        return redirect()->route("wallets");
    }



}
