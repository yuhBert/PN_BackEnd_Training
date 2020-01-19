<?php
    session_start();
    include_once("yConn(01-16-20).php");
    require_once('yCode(01-16-20).php');
    if(isset($_POST['update']))
    {    
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $address = $_POST['address'];   
        $course = $_POST['course'];
        $school = $_POST['school'];
          
        if(empty($fname) || empty($lname) || empty($address) || empty($course) || empty($school)) {                
        
                echo "<font color='red'>field is empty.</font><br/>";
        } else {    
            $updatedata=new Db();
            $sql=$updatedata->update($fname,$lname,$address,$course,$school,$id);
            header("Location:yViewStudent(01-16-20).php");
        }
    }
?>

