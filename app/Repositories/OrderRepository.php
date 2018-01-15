<?php


namespace App\Repositories;

use App\Order;
use Illuminate\Support\Facades\DB;

class OrderRepository extends DbBaseReepository{

    public function __construct(Order $order){
        $this->entity = $order;
    }

    //Here REQUETE

}