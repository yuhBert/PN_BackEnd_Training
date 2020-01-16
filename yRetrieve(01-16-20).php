<?php
 session_start();
 $db = mysqli_connect('localhost', 'root', '', 'pntraining');


 if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $res_u = mysqli_query($db, $sql_u);
  
    if (mysqli_num_rows($res_u) > 0 ) {
       $test = mysqli_fetch_array($res_u);
    //    echo $test['password'];
       if($test['password'] == $password){
           $_SESSION['login'] = 1;
         header("Location:yAddStudent(01-16-20).php");
       }else{
        $message = "incorrect password  ";
        echo "<script type='text/javascript'>alert('$message');</script>";
       }
    }else{
        
        header("Location:yLogin(01-16-20).php");
        exit();
    }
}
mysqli_close($db);
?>