<?php
session_start();
unset($_SESSION['logged_in']);
session_destroy();

header("Location:yLogin(01-16-20).php");
exit;
?>