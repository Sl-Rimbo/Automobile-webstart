<?php

namespace App\Controller;

class ProductController implements App\Common\ControllerInterface{ 
    
    public function show(){

        if(!isset($_GET['id']))
            Header('Location: '.WEBSITE_URL);

        echo "je suis dans le produit ".$_GET['id'];

        
    }


}
