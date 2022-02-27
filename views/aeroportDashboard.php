<?php
    require_once '../controllers/AeroportController.php';
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
                    <th>Aeroporti</th>
                    <th>Qyteti</th>
                    <th>Edit Field</th>
                    <th>Delete Field</th>
                    <th>Add Field</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $m = new AeroportController;
                $all = $m->readData();
                foreach($all as $items): ?>
                <tr>
                    <td><?php echo $items['EmriIAeroportit'];?></td>
                    <td><?php echo $items['Qyteti']?></td>
                    <td><a href="edit-aeroport.php?id=<?php echo $items['Id'];?>">Edit</a></td>
                    <td><a href="delete-aeroport.php?id=<?php echo $items['Id'];?>">Delete</a></td>
                <?php endforeach; ?>
                    <td><?php echo '<a href="create-aeroport.php">Add</a>'?></td>;

            </tbody>
        </table>
    </div>