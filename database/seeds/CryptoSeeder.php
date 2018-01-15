<?php

use Illuminate\Database\Seeder;

class CryptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        CryptoModel::truncate();
        CryptoModel::create(array("symbol" => "BTC","name" => "Bitcoin"));
        CryptoModel::create(array("symbol" => "ETH","name" => "Ethereum"));
    }
}
