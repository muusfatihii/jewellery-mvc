<?php

require_once ('src/model/category.php');
require_once ('src/model/item.php');
require_once ('src/lib/DatabaseConnection.php');

function modifyPage(){

    $connectiondb = new DatabaseConnection();

    $categoryRepo = new CategoryRepository();
    $categoryRepo->connectiondb = $connectiondb;

    $itemRepo = new ItemRepository();
    $itemRepo->connectiondb = $connectiondb;

    $item = $itemRepo->getItem(11);
    $category = $categoryRepo->getCategoryName($item->idCategory);

    $categories = $categoryRepo->getCategories();

    require_once ('templates/modifyitem.php');
}