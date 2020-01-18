<?php

    function cheesBoard()
    {
        for($row=1;$row<=8;$row++)
        {
            echo "<tr>";
            for($col=1;$col<=8;$col++)
            {
                $total=$row+$col;
                if($total % 2 == 0)
                {
                    echo "<td height=15px width=15px bgcolor=#FFFFFF></td>";
                }else{
                    echo "<td height=15px width=15px bgcolor=#000000></td>";
                }
            }
            echo "</tr>";
        }
    }

    function removeValue($element, $array)
    {
        $index = array_search($element, $array);
        if($index !== false)
        {
            unset($array[$index]);
        }

        echo implode(" ",$array);
    }
    
    function displayMultidimensionalArray($multiArray)
    {
        print_r($multiArray)." ";       
    }

    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color) {
          $this->name = $name;
          $this->color = $color; 
        }
        public function intro() {
          echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
      }
      
      // Apple is inherited from Fruit
      class Apple extends Fruit {
        public function message() {
          echo "Am I a fruit or a vegetable? <br>"; 
        }
      }
      
      

    

    require_once("yConn(01-16-20).php");
    class Db{
    function __construct(){
    global $databaseHost,$databaseName,$databasePassword,$databaseUsername;
        $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
        $this->dbh=$mysqli;
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        }
        
        public function add($fname,$lname,$address,$course,$school)
            {
            $ret=mysqli_query($this->dbh,"INSERT INTO student(firstname, lastname, address, course, school) VALUES('$fname','$lname','$address', '$course', '$school')");
            return $ret;
            }

        public function fetchdata()
            {
            $result=mysqli_query($this->dbh,"select * from student");
            return $result;
            }

        public function fetchonerecord($id)
        {
            $oneresult=mysqli_query($this->dbh,"select * from studnet where id=$id");
            return $oneresult;
            }

        public function update($fname,$lname,$address,$course,$school,$id)
            {
            $updaterecord=mysqli_query($this->dbh, "UPDATE student SET firstname='$fname', lastname='$lname', address='$address', course='$course', school='$school' WHERE id=$id");
            return $updaterecord;
            }

        public function delete($id)
            {
            $deleterecord=mysqli_query($this->dbh,"delete from student where id=$id");
            return $deleterecord;
            }
        }      

?>