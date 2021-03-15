<?php

namespace App\Controller\Admin;

class CategoryController{
    
    public function show(){

        $sql = 'SELECT * FROM category';

        $pdo = new PDO('mysql:dbname=webstart;host=localhost', 'bertrand','bertrand');
        $state = $pdo->prepare($sql);
        $state->execute();
        $results = $state->fetchAll();

        foreach($results as $result){
            echo $result['title'];
            echo "\n";
            echo $result['description'];
        }    
    
    }


}