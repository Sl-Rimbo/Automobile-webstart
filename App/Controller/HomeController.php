<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface as CInterface;

class HomeController extends Controller implements CInterface{

    public function show(){

        $sql = "SELECT * FROM category";
        
        $datas =  $this->getData($sql);
        $introduction = "ceci est l'introduction de ma page.";

        $arrayToTemplate = ['title' => 'webstart shop', 'introduction' => $introduction ,'categories' => $datas];

        $this->render($arrayToTemplate, 'home');
        
    }

}