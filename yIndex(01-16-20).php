<?php
    if (isset( $_SESSION["logged_in"])) {
        if ( !$_SESSION["logged_in"]) {
            header("Location:yLogin(01-16-20).php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mariscal_Yubert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    #header {
        border:2px;
        background-color:black;
    }
    
  </style>
</head>
<body>

  <div class="container-fluid" id="header">
    <div class="navbar-header">
     <h3 style="text-align:center;color:white">Week 1 - PHP_Learnings</h3>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <div class="nav navbar-nav navbar-right">
        <a href="yLogout(01-16-20).php"><h4 class="glyphicon glyphicon-log-out" style="margin-bottom:4%"> LogOut </h4></a>
    </div>
    </div>
  </div>
<hr><hr>
  
<div class="container text-center">    

  <div class="row">
    <div class="col-sm-3 well">
    <p style="color:green">Sample Output</p>
      <div class="well">
        <p style="color:red">Chess Board</p>
        <table width="180px" border="5px">
            <?php
                include "yCode(01-16-20).php";

                echo cheesBoard();
            ?>
        </table>
      </div>

      <div class="well">
        <p style="color:red">Printing a Pattern</p>
    
        <br>
            <?php  
            
                for($i=15; $i>=1; $i--)  
                {  
                    if($i%2 != 0)  
                    {  
                        for($j=15; $j>=$i; $j--)  
                    {  
                        echo "T ";  
                    }  
                        echo "<br>";  
                    }  
                }  
                    for($i=2; $i<=15; $i++)  
                {  
                    if($i%2 != 0)  
                    {  
                        for($j=15; $j>=$i; $j--)  
                    {  
                        echo "T ";  
                    }  
                        echo "<br>";  
                    }  
                }  
            ?>  
      </div>

    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
            <p style="color:red">Removing an Element in an array using its value<br>In this case we remove the month of January</p>
           <?php
            $month = ["January", "February","March","April","May","June","July","August","September","October","November","December"];   
            removeValue('January', $month);
           ?> 
           
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <p style="color:red">Printing an ASSOCIATIVE ARRAY </p>
            <hr>
            <p style="color:green">array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43")</p>
            <?php
              $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
              echo "Peter is " . $age['Peter'] . " years old.";
            ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <p style="color:red">Printing a MULTIDIMENSIONAL ARRAY</p>
            <hr>
            <p style="color:green">$multiArray = [
                "food"=>["Go", "Grow", "Glow"],
                "section" => ["sectionA" => [1 => "Yubert",2 => "Yuh Ann", 3 => "Yuh Vellen", 4 => "Ubaldo", 5 => "Andrea"],
                "sectionB" => [1 => "Joel","Richard",  "Zabdiel", "Erick", "Christoper"]],
                "ph_presidents" => ["Duterte", "Marcos", "Aguinaldo"]
            ];</p>
            <?php
            $multiArray = [
              "food"=>["Go", "Grow", "Glow"],
              "section" => ["sectionA" => [1 => "Yubert",2 => "Yuh Ann", 3 => "Yuh Vellen", 4 => "Ubaldo", 5 => "Andrea"],
              "sectionB" => [1 => "Joel","Richard",  "Zabdiel", "Erick", "Christoper"]],
              "ph_presidents" => ["Duterte", "Marcos", "Aguinaldo"]
          ];
            displayMultidimensionalArray($multiArray);
            ?>
          </div>
        </div>
      </div>
      <div class="row">
        
        <div class="col-sm-12">
          <div class="well">
            <p style="color:red">Using Inheritance</p>
          <?php
          $strawberry = new Apple("Apple", "red");
          $strawberry->message();
          $strawberry->intro();
          ?>

           </div>
        </div>
      </div>
      <div class="row">
        
        <div class="col-sm-12">
          <div class="well">
          <div class="thumbnail">
        <p style="color:red">Sample CRUD using PHP with MYSQL</p>
       
        <p><strong></strong></p>
        
        <a href="yViewStudent(01-16-20).php"><button class="btn btn-primary">CRUD</button>
      </div>    
          </div>
        </div>
      </div>     
    </div>
    
  </div>
  
</div>

<hr><hr>
<footer class="container-fluid text-center">
  <p style="color:white">PN_TRAINING_BACKEND_(PHP_LARAVEL)_WEEK1</p>
</footer>

</body>
</html>
