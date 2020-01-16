<?php

    $servername = "localhost";
    $username = "root";//default
    $password = "";//default

    $conn = mysqli_connect($servername,$username,$password,"pntraining");

    
    header("Location:yLogin(01-16-20).php");
    if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
        
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
    // $conn = new mysqli($servername,$username,$password,"pntraining");
        
        if($userName != '' || $email != '' || $password != '' ){
            $sql = "INSERT INTO users (username,email,pass)Values('$userName','$email','$password')";

            $query= mysqli_query($conn,$sql);
            echo "<br>Record Inserted successfully";
        }else{
                echo "Error!!! Unable to Insert Data";
        }
    }

    mysqli_close($conn);
    
?>