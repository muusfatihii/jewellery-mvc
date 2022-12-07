<?php

require_once('src/model/item.php');

require_once('src/lib/DatabaseConnection.php');



function modifyItem(string $identifier, array $input)
{
    $connectiondb = new DatabaseConnection();

    $itemRepo = new ItemRepository();
    $itemRepo->connectiondb = $connectiondb;


    if (!empty($input['name']) && !empty($input['price']) && !empty($input['quantity']) && !empty($input['idCategory'])) {
    
        
    } else {
        throw new Exception('Les données du formulaire sont invalides.');
    }

    $success = $itemRepo->modifyItem($identifier, $input);
    if (!$success) {
        throw new Exception("Impossible de modifier l'article !");
    } else {
        header('Location: index.php?action=items');
    }
}
