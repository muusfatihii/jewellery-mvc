<?php

require_once('src/controllers/add_item.php');
require_once('src/controllers/modify_item.php');
require_once('src/controllers/delete_item.php');
require_once('src/controllers/item.php');
require_once('src/controllers/items.php');
require_once('src/controllers/filter_items.php');
require_once('src/controllers/homepage.php');
require_once('src/controllers/add_item_page.php');
require_once('src/controllers/modify_item_page.php');

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {


        switch($_GET['action']) {

            case 'item':
              
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $identifier = $_GET['id'];
            
                    item($identifier);
                } else {
                    throw new Exception("Aucun identifiant d'article n'est envoyé");
                }

                break;

            case 'items':

                    items();

                    break;
              
            case 'addItem':

              addItem($_POST);

              break;

            case 'modifyItem':

                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $identifier = $_GET['id'];
            
                    modifyItem($identifier, $_POST);
                } else {
                    throw new Exception("Aucun identifiant d'article n'est envoyé");
                }
                break;

            case 'deleteItem':

                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $identifier = $_GET['id'];
            
                    deleteItem($identifier);
                } else {
                    throw new Exception("Aucun identifiant d'article n'est envoyé");
                }
            
            case 'filter':

                if (isset($_POST['categoryid']) && $_POST['categoryid'] > 0) {
                    $idcategory = $_POST['categoryid'];
            
                    filterItems($idcategory);
                } else {
                    throw new Exception("Aucune catégorie n'est renseignée");
                }

                break;

            default:
            throw new Exception("La page que vous recherchez n'existe pas.");
          }

    } else {


        //homepage();
        //addPage();
        modifyPage();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require('templates/error.php');
}
