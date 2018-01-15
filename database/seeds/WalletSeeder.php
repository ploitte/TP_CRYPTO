<?php

use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WalletModel::truncate();
        WalletModel::create(array("user_id" => 1, "wallet" => "testWalletBTC", "funds"=>"123.00000000", "name"=>"BTC"));
        WalletModel::create(array("user_id" => 1, "wallet" => "testWalletETH", "funds"=>"0.00000215", "name"=>"ETH"));
    }
}
