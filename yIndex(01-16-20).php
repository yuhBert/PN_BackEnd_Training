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
        <a href="#"><h4 class="glyphicon glyphicon-log-out" style="margin-bottom:4%"> LogOut </h4></a>
    </div>
    </div>
  </div>
<hr><hr>
  
<div class="container text-center">    

  <div class="row">
    <div class="col-sm-3 well">
    <p>Sample Output</p>
      <div class="well">
        <p>Chess Board</p>
        <table width="180px" border="5px">
            <?php
                include "yCode(01-16-20).php";

                echo cheesBoard();
            ?>
        </table>
      </div>

      <div class="well">
        <p>Printing a Pattern</p>
    
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
            <p>Removing an Element in an array using its value<br>In this case we remove the month of January</p>
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
            <p>Printing an ASSOCIATIVE ARRAY </p>
            <hr>
            <p>array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43")</p>
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
            <p>Printing a MULTIDIMENSIONAL ARRAY</p>
            <hr>
            <p>$multiArray = [
                "food"=>["Go", "Grow", "Glow"],
                "section" => ["sectionA" => [1 => "Yubert",2 => "Yuh Ann", 3 => "Yuh Vellen", 4 => "Ubaldo", 5 => "Andrea"],
                "sectionB" => [1 => "Joel","Richard",  "Zabdiel", "Erick", "Christoper"]],
                "ph_presidents" => ["Duterte", "Marcos", "Aguinaldo"]
            ];</p>
            <?php
            
            ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Jane</p>
           <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Anja</p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2015</p>
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<hr><hr>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
