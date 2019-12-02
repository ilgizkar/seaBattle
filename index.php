<?php

require_once "controller.php";
require_once "DB.php";

$table = new Controller;
$matrix = $table->showEmptyTable();

if(isset($_POST['showTable'])){
    $matrix = $table->showShipsTable();
}

$db = new DB('127.0.0.1', 'root','', 'seaBattle');
//print_r($db);

require_once "view.php";

if(isset($_GET['id'])){
    $db->saveTable($matrix);
    $matrix = $db->selectTable();
    return $matrix;

}

