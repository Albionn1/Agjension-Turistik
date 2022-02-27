<?php
    require_once '../controllers/VendetController.php';
?>
<style>
*{
font-family: sans-serif;
}

.content-table {
border-collapse: collapse;
margin: 25px 0;
font-size: 0.9em;
width: 100%;
border-radius: 5px 5px 0 0;
overflow: hidden;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
background-color: #42445a;
color: #ffffff;
text-align: left;
font-weight: bold;
}

.content-table th,
.content-table td {
padding: 12px 15px;
}
.link{
text-decoration: none;
color: red;
font-size: 17px;
}
.first-link{
color: black;
font-size: 22px;
padding-left: 50%;
position: relative;
top: 20px;
}
.top-links{
font-size: 30px;
color: black;
padding: 30px;
text-decoration: none;
}
</style>
    <div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Fotografia e vendit</th>
                    <th>Emri i qytetit</th>
                    <th>Emri i shtetit</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Add</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $m = new VendetController;
                $allmenu = $m->readData();
                foreach($allmenu as $menu): ?>
                <tr>
                    <td><?php echo $menu['Photo']; ?> </td>
                    <td><?php echo $menu['Qyteti']; ?></td>
                    <td><?php echo $menu['Shteti']?></td>
                    <td><a href="edit-menu.php?id=<?php echo $menu['Id'];?>">Edit</a></td>
                    <td><a href="delete-menu.php?id=<?php echo $menu['Id'];?>">Delete</a></td>
                
                
                <?php endforeach; ?>
                    <td> <?php echo '<a href="create-menu.php">Add'?></td>
                </tr>
            </tbody>
        </table>
    </div>