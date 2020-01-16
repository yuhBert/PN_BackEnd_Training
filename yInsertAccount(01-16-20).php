<!-- <html>
    
    <body>
        
    </body>
</html> -->
<?php 
    $db = mysqli_connect('localhost', 'root', '', 'pntraining');
    $username = "";
    $email = "";
    $password= "";
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql_u = "SELECT * FROM users WHERE username='$username'";
        $sql_e = "SELECT * FROM users WHERE email='$email'";
        $res_u = mysqli_query($db, $sql_u);
        $res_e = mysqli_query($db, $sql_e);

        if (mysqli_num_rows($res_u) > 0 || mysqli_num_rows($res_e) > 0) {
           
            $message = "Sorry... username or email already taken";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header( "refresh:0.5; url=yRegister(01-16-20).php" );
        }else{
            $query = "INSERT INTO users (username, email, password) 
                    VALUES ('$username', '$email', '$password')";
            $results = mysqli_query($db, $query);
            header("Location:yLogin(01-16-20).php");
            exit();
        }
    }
    mysqli_close($db);
?>
