<?php
    require_once '../controllers/VendetController.php';

    $menu = new VendetController;
    if(isset($_POST['submit'])){
        $menu->insert($_POST);
    }
?>
<div>
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        Qyteti:
        <input type="text" name="Qyteti">
        <br>
        Shteti:
        <input type="text" name="Shteti">
        <input type="submit" name="submit" value="Save">
    </form>
</div>
