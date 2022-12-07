<?php

require_once('src/model/item.php');

require_once('src/lib/DatabaseConnection.php');



function addItem(array $input)
{
    $connectiondb = new DatabaseConnection();

    $itemRepo = new ItemRepository();
    $itemRepo->connectiondb = $connectiondb;

    // $name = null;
    // $price = null;
    // $quantity = null;
    // $idCatgory = null;
    // $pic = null;
    // $description = null;

    if (!empty($input['name']) && !empty($input['price']) && !empty($input['quantity']) && !empty($input['idCategory'])) {

        $input['pic'] = "vide";
        // $name = $input['name'];
        // $price = $input['price'];
        // $quantity = $input['quantity'];
        // $idCatgory = $input['idCategory'];
        // $description = $input['description'];

        // if (!empty($input['pic'])) {

        //     $pic = $input['pic'];
        // }

        // $input =[];

        
    } else {
        throw new Exception('Les données du formulaire sont invalides.');
    }

    $success = $itemRepo->createItem($input);
    if (!$success) {
        throw new Exception("Impossible d\'ajouter l'article !");
    } else {
        header('Location: index.php?action=items');
    }
}
