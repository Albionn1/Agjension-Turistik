<?php
    $conn = new MySQLi('localhost:3307', 'root', '', 'aeroporti');
    $resultSet = $conn->query("SELECT EmriIAeroportit FROM aeroportet");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Air Travel</h1>
        </div>
        <div class="nav-bar">
            <nav>
                <ul class="nav-list">
                    <li> <?php echo '<a href="index.php"><span class="currentPage">Ballina</span></a>'?></li>
                    <li> <?php echo '<a href="atraksione.php">Atraksione</a>'?></li>
                    <li> <?php echo '<a href="destinacionet.php">Destinacione</a>'?></li>
                    <li> <?php echo '<a href="rrethnesh.php">Rreth Nesh</a>'?></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="landing-page">
        <div class="landing-pageInside"></div>
            <img src="images/rightarrow.png" alt="" class="arrowTo">
            <div class="formBox">
                <!-- <input type="text" id = "nisja" placeholder="Nisja"> -->
          <!--       <input type="text" name="nisja" list="nisja" autocomplete="off" placeholder="Nisja" id="nis" /> -->
                    <?php
                        $query = mysqli_query($conn, "SELECT EmriIAeroportit FROM aeroportet");
                        echo '<input type="text" name="nisja" list="nisja" autocomplete="off" placeholder="Nisja" id="nis" />';
                        echo '<datalist id="nisja">';
                            while($row=mysqli_fetch_array($query)){
                                echo "<option>$row[EmriIAeroportit]</option>";
                            }
                        echo '</datalist';
                    ?>

                    <!-- <input type="text" name="destinacioni" list="destinacioni" autocomplete="off" placeholder="Destinacioni" id="dest"/> -->
                    <?php
                        $query = mysqli_query($conn, "SELECT EmriIAeroportit FROM aeroportet");
                        echo '<input type="text" name="destinacioni" list="destinacioni" autocomplete="off" placeholder="Destinacioni" id="dest" />';
                        echo '<datalist id="destinacioni">';
                            while($row=mysqli_fetch_array($query)){
                                echo "<option>$row[EmriIAeroportit]</option>";
                            }
                        echo '</datalist';
                    ?> 
                    <!-- <input type="text" id = "destinacioni" placeholder="Destinacioni"> -->
                    <button type="submit" class="sbmBtn">Rezervo</button>
            </div>
        </div>
    </div>
    <footer>Sky Travel &copy 2022</footer>
</body>
</html>