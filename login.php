<?php 

session_start(); 

$sname= "localhost:3307";

$unmae= "root";

$password = "";

$db_name = "aeroporti";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: admin.php?error=Username is required");

        exit();

    }else if(empty($pass)){

        header("Location: admin.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM Admins WHERE Username='$uname' AND Password ='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $uname && $row['Password'] === $pass) {

                echo "Logged in!";

                $_SESSION['Username'] = $row['Username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: views/vendetDashboard.php");

                exit();

            }else{

                header("Location: admin.php?error=Incorrect Username or password");

                exit();

            }

        }else{

            header("Location: admin.php?error=Incorrect Username or password");

            exit();

        }

    }

}else{

    header("Location: admin.php");

    exit();

}