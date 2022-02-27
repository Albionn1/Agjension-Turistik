<?php
    require_once '../controllers/VendetController.php';

    if(isset($_GET['id'])){
        $MenuId = $_GET['id'];

    }
    $menu = new VendetController;

    $menu->delete($MenuId);
?>