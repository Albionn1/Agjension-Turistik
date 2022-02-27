<?php
    require_once '../controllers/AeroportController.php';

    if(isset($_GET['id'])){
        $menuId = $_GET['id'];
    }
    $menu = new AeroportController;
    $currentMenu = $menu->edit($menuId);

    if(isset($_POST['submit'])){
        $menu->update($_POST, $menuId);
    }
?>

<form method="post">
    Emri i aeroportit:
    <input type="text" name="Aeroporti" value="<?php echo $currentMenu['EmriIAeroportit'];?>">
    <br>
    Qyteti
    <input type="text" name="Qyteti" value="<?php echo $currentMenu['Qyteti'];?>">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>