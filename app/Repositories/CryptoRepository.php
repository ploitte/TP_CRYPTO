<?php


namespace App\Repositories;

use CryptoModel;
use Illuminate\Support\Facades\DB;

class CryptoRepository extends DbBaseReepository{

    public function __construct(CryptoModel $crypto){
        $this->entity = $crypto;
    }


    public function updateCurrentPrice(){

        $btc = json_decode(file_get_contents('https://api.coinmarketcap.com/v1/ticker/bitcoin/'));
        $eth = json_decode(file_get_contents('https://api.coinmarketcap.com/v1/ticker/ethereum/'));
        
        $btcPrice = $btc[0]->price_usd;
        $ethPrice = $eth[0]->price_usd; 

        CryptoModel::where("symbol", "BTC")
        ->update(["currentPrice" => $btcPrice]);

        CryptoModel::where("symbol", "ETH")
        ->update(["currentPrice" => $ethPrice]);

    }



}