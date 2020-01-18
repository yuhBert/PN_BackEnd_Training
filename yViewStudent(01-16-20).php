<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <style>
        #container {
            margin-top:2%;
            margin-left:15%;
            margin-right:15%;
        }
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
    
    <body>
    <div class="container-fluid" id="header">
            <div class="navbar-header">
                <h3 style="text-align:center;color:white">Week 1 - PHP_Learnings</h3>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <div class="nav navbar-nav navbar-right">
                    <a href="yIndex(01-16-20).php"><h1  style="margin-bottom:4%"> Back </h1></a>
                </div>
            </div>
        </div>
  <hr>

        <?php 
            $link = mysqli_connect("localhost", "root", "", "pntraining");


            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM student";
            $result = mysqli_query($link, $sql);
            if($result){
               
                if(mysqli_num_rows($result) > 0){
                   
               
                    while($row = mysqli_fetch_array($result)){
                        $id = $row['id'];
                        
                        echo "
                        <div style=' margin-top:2%;margin-left:25%;margin-right:25%;'>
                            <table class='table table-hover'>
                            <thead>
                                <tr>
                                    <th scope='col'>ID</th>
                                    <th scope='col'>First Name</th>
                                    <th scope='col'>Last Name</th>
                                    <th scope='col'>Address</th>
                                    <th scope='col'>Course</th>
                                    <th scope='col'>School</th>
                                    <th colspan='2'>Action</th>
                                    
                                </tr>
                            </thead>  
                        
                    
                        <tbody>
                            <tr>
                                <th scope='col-6'>".$row['id']."</th>
                                <th scope='col'>".$row['firstname']."</th>
                                <th scope='col'>".$row['lastname']."</th>
                                <th scope='col'>".$row['address']."</th>
                                <th scope='col'>".$row['course']."</th>
                                <th scope='col'>".$row['school']."</th>
                                
                                <td><a href='yDelete(01-16-20).php?id=$id'><button class='btn-outline-danger'>Delete</button></td>
                                <td><a href='yEditStudents(01-16-20).php?id=$id'><button class='btn-outline-primary'>Edit</button></td>
                            </tr>   
                        </tbody>
                    </table>
                    </div>
                    ";
                    }
                    mysqli_free_result($result);  
                } else{
                    echo "<h1 style='text-align:center'>No  Records Were Found</h1>";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            mysqli_close($link);
        ?>
    <center>
    <a href='yAddStudent(01-16-20).php?id=$id'><button class='btn-outline-success'>Add Student</button>
    </center>
        

    </body>
</html>

