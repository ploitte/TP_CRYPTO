<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       UserModel::truncate();
       UserModel::create(array("name"=>"laxa", "email" => "lucrosinol@gmail.com", "password" => "password", "remember_token" => "iosdkjffsdfkjolshf"));
    }
}
