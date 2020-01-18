<?php

    $servername = "localhost";
    $username = "root";//default
    $password = "";//default

    $conn = mysqli_connect($servername,$username,$password,"pntraining");

    header("Location:yViewStudent(01-16-20).php");
    if(isset($_POST['addStudent'])){ // Fetching variables of the form which travels in URL
        
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $address = $_POST['address'];
        $course = $_POST['course'];
        $school = $_POST['school'];
               
        if($fname != '' && $lname != '' &&  $address != '' &&  $course != '' && $school != ''){
            $sql = "INSERT INTO student (firstname,lastname,address,course,school)Values('$fname','$lname','$address','$course','$school')";

            $query= mysqli_query($conn,$sql);
            
        }else{
                echo "Error!!! Unable to Insert Data";
        }
    }

    mysqli_close($conn);
    
?>

