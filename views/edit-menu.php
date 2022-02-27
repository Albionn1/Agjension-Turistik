<?php
    require_once '../controllers/VendetController.php';

    if(isset($_GET['id'])){
        $menuId = $_GET['id'];
    }
    $menu = new VendetController;
    $currentMenu = $menu->edit($menuId);

    if(isset($_POST['submit'])){
        $menu->update($_POST, $menuId);
    }
?>

<form method="post">
    Image:
    <input type="file" name="image" value="<?php echo $currentMenu['Photo'];?>">
    <br>
    Qyteti
    <input type="text" name="Qyteti" value="<?php echo $currentMenu['Qyteti'];?>">
    <br>
    Shteti:
    <input type="text" name="Shteti" value="<?php echo $currentMenu['Shteti'];?>">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>