<?php
    session_start();
    // session_destroy();
    
    // if(!isset($_SESSION['username'])) {
    //     $_SESSION['username'] = $_POST['username'];
    //     echo $_SESSION['username'];
    // } else {
    //     session_unset();
    // }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pntraining";
    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $login = false;
    if(isset($_POST['login'])) {
        $name = $_POST['username'];
        $pass = $_POST['password'];
        $query = "SELECT username, password FROM users WHERE username='".$name."'";
        if($result = $conn->query($query)) {
            if (mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_array($result);
                if($user_data['username'] === $name && $user_data['password'] === $pass) {
                    // $login = true;
                    $_SESSION["logged_in"]=true;
                    $_SESSION["user"]=$user_data["id"];
                    header("Location:yIndex(01-16-20).php");
                }else {
                    // $login = false;
                    $_SESSION["logged_in"]=false;

                    echo "Error 404!";
                }
            }else {
                $message = "No result found! We are not able to find your account. Try loging in again";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("refresh:0.5; url=yLogin(01-16-20).php");
            }
        }   
    }
    exit();
    $conn->close();
?>