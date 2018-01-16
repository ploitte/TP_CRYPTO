<?php


namespace App\Repositories;

use App\Wallet;
use Illuminate\Support\Facades\DB;

class WalletRepository extends DbBaseReepository{

    public function __construct(Wallet $wallet){
        $this->entity = $wallet;
    }

    //Here REQUETE

    public function getByAuth($id_user){
        return DB::select("SELECT * FROM wallets WHERE user_id = $id_user");
    }

    public function createWallet(array $attributes){
        DB::table("wallets")->insert($attributes);
    }

}
