<?php
    require_once '../controllers/AeroportController.php';

    $menu = new AeroportController;
    if(isset($_POST['submit'])){
        $menu->insert($_POST);
    }
?>
<div>
    <form method="post">
        Emri i aeroportit:
        <input type="text" name="Aeroporti">
        <br>
        Qyteti:
        <input type="text" name="Qyteti">
        <input type="submit" name="submit" value="Save">
    </form>
</div>
