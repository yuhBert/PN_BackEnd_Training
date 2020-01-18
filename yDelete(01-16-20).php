
<?php
    session_start();

    if(!isset($_SESSION['logged_in'])) {
        header('Location:yLogin(01-16-20).php');
    }
    
    include("yConn(01-16-20).php");
    require_once('yCode(01-16-20).php');
    
    $id = $_GET['id'];
    $deletedata=new Db();
    $sql=$deletedata->delete($id);
    
    header("Location:yViewStudent(01-16-20).php"); 
?>