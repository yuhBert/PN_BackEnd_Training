<?php
    $link = mysqli_connect("localhost", "root", "", "pntraining");

    $id=$_REQUEST['id'];

    $query = "DELETE FROM student WHERE id=$id"; 
    $result = mysqli_query($link,$query) or die ( mysqli_error());
    header("Location:yViewStudent(01-16-20).php"); 
?>