<html>
    <style>
        h1{
            text-align: center;
            color: red;
        }
    </style>
    <body>
    
        <hr>
        <h1>PHP Exercises - Part 2</h1>
        <hr>
        
        <?php
            echo "<br><br>Number 1: <br>";
            class User {
                private $name;
                public $age;
                public  $address;
                function __construct( $name, $age, $address) 
                {
                    $this->name = $name;
                    $this->age = $age;
                    $this->address = $address;
                }
                function getName() 
                {
                    return $this->name;
                }
                private function getAge() 
                {
                    return $this->age ;
                }
                    
                function displayAge()
                {
                    return $this->getAge();
                }
                function getAddress()
                {
                    return $this->address;
                }
            }

            $obj = new User("Lucifer", 20,"Underworld");
            echo "Holla " .$obj->getName(). "!<br>You are ".$obj->displayAge() ." years old and you are living in the place called ".$obj->getAddress();
                
        ?>

        <?php
            echo "<hr>Number 2 :";
            session_start();
            if(isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['browser'])){
                echo "<br>your name, email and browser already saved!";
            }else{
                $_SESSION['name'] ='lucifer';
                $_SESSION['email'] = 'lucifer@gmail.com';
                $_SESSION['browser'] = array ('Firefox','Chrome','Internet Explorer','Safari','Opera');
                echo "<br>saving...";
            }
            echo "<br>Username : " . $_SESSION["name"];
            echo "<br>";
            echo "Email : " . $_SESSION["email"];
            echo "<br>";
            echo "Browser : " . $_SESSION["browser"][1];
            echo "<br>";
        ?>

        <?php
            echo "<hr><br>Number 3: <br>";
            function readArray(){
                $marks1 = array(0,2,4,6,8); 
                $marks2 = array(3,6,9,17,1); 
                $marks3 = array(0,1,2,3,4); 
                $max_marks = max(max($marks1),max($marks2),max($marks3)); 
                $min_marks = min(min($marks1),min($marks2),min($marks3)); 
                echo "Maximum marks : ".$max_marks."<br>";
                echo "Minimum marks : ".$min_marks."<br>";
            };
            readArray();
            echo "<hr>";
        ?>

    </body>
</html>

