<?php

namespace App\Controller\Secure;

class OrderController{
    
    public function show(){
        echo "je suis dans la page de mes commandes";
    }

    public function detail($orderId){

        echo "je suis dans la page de détail de la commande $orderId";
    }


}