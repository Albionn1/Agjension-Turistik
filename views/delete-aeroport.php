<?php
    require_once '../controllers/AeroportController.php';

    if(isset($_GET['id'])){
        $MenuId = $_GET['id'];

    }
    $menu = new AeroportController;

    $menu->delete($MenuId);
?>