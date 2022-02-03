<?php 
ob_start();

if($action == "delete_book"){
    $delete = $crud->delete_book();
    if($delete)
        echo $delete;
}