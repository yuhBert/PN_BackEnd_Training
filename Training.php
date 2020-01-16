<?php

    // echo "I'm php";
  
    // echo gettype(null);


    // part 1 of training

    // class greeting{

    //     //properties
    //     public $str = "hello Yubert";
    //     public $str1 = "hello Morningstar";
        
    //     //methods
    //     function show_gretting(){
    //         $test = "This is a test";
    //         // return $test;
    //         return $this-> str1;
    //     }

    //     function show_gretting2($name){
    //         $test = "I am".$name;
    //         return $test;
    //     }
        
    //     //methods
    //     function show_gretting1(){
    //         return $this-> str1;
    //     }

    // }

    // $message = new greeting;
    // // var_dump($message);
    // // var_dump($message->show_gretting());
    // var_dump($message->show_gretting2(" Mariscal"));


    // Defining Constant - dli nani ma redifine
    // define('test',"kani sha");

    // $test = 'exam';

    // //echo 'Thank you for visiting - '.test;
    // echo 'Thank you for visiting - '.$test;

    //strings
    // var_dump('Ako ra');
    // echo '<br>sava ka dha';

    // //concatination
    // $name = "<br>Yubert";
    // echo $name .' is gwapo';

    //condition if-else
    // $var = 10;
    // if ($var <=9){
    //     echo 'I am less than or equal to 9';
    // }else{
    //     echo 'I am not';
    // }


    // $var = 10;

    // echo $var <= 10?'Yes':'No';

    //switch case
    // $month = 'Jan';
    // switch ($month){
    //     case "Jan":
    //         echo "January";
    //         break;
    //     case "Feb":
    //         echo "February";
    //         break;
    //     case "Mar":
    //         echo "March";
    //         break;
    //     default:
    //         echo "Does Not Exist";
    // }
    

    //Arrays
    //numeric array
    // $variable_name[0] = 'value';
    // $variable_name = array(0 => 'value');
    // $variable_name = ['value'];
    
    // var_dump($variable_name);

    // $movie[0] = "shaolin monk";
    // $movie[1] = "shaolin monk1";
    // $movie[2] = "shaolin monk2";
    // $movie[3] = "shaolin monk3";
    // $movie[4] = "shaolin monk4";
    //     $movie[3] = "Eastern Condors"; //override the value of prev
    // print_r($movie);
    // echo '<br>';
    // var_dump($movie);

    // $movie2 = array(
    //     0=> "shaolin",
    //     1=> "shaolin1",
    //     2=> "shaolin2",
    //     3=> "shaolin3",
    //     4=> "shaolin4",
    // // $movie2[4] = "superman"
    // );
   
    // array_push($movie2,'hohoho');
    // var_dump($movie2);
    // echo '<br>';

    //pagtanggal sa array
    // unset($movie2[4]);
    // var_dump($movie2);
    // echo '<br>';
    // array_splice($movie2, 1,3, 'test');
    // var_dump($movie2);


    //associative array
    // $film = array(
    //     "comedy" => array(
    //         0=> "shaolin",
    //         1=> "shaolin1",
    //         2=> "shaolin2"
    //         ),
    //     "horror" => array(
    //         'test'=> "shaolin4",
    //         1=> "shaolin5",
    //         )
    //     );
    //     //access the array
    //     print_r($film['horror']['test']);

    //for loop
    // $movie[0] = "shaolin monk";
    // $movie[1] = "shaolin monk1";
    // $movie[2] = "shaolin monk2";
    // $movie[3] = "shaolin monk3";
    // $movie[4] = "shaolin monk4";

    // for($x = 0 ; $x < count($movie); $x++){
    //     echo $movie[$x]."<br>";
    // }

    //for each
    // $movie[0] = "shaolin monk";
    // $movie[1] = "shaolin monk1";
    // $movie[2] = "shaolin monk2";
    // $movie[3] = "shaolin monk3";
    // $movie[4] = "shaolin monk4";
    
    // foreach($movie as $salida){
    //     echo $salida . "<br>";
    // }

    //while
    // $movie[0] = "shaolin monk";
    // $movie[1] = "shaolin monk1";
    // $movie[2] = "shaolin monk2";
    // $movie[3] = "shaolin monk3";
    // $movie[4] = "shaolin monk4";
    //     $i = 0;
    // while($i < count($movie)){
    //     echo $movie[$i] . "<br>";
    //     $i++;
    // }

    //do-while
    // $movie[0] = "shaolin monk";
    // $movie[1] = "shaolin monk1";
    // $movie[2] = "shaolin monk2";
    // $movie[3] = "shaolin monk3";
    // $movie[4] = "shaolin monk4";
    // $i = 0;
    // do{
    //     echo $movie[$i] . "<br>";
    //     $i++;
    // }while($i < count($movie));


    //error handling
    // $denominator = 0;
    // if ($denominator != 0){
    //     echo 2 / $denominator;
    // } else {
    //     echo "cannot divide by zero (0)";
    // }

    // function my_error_handler($error_no, $error_msg){
    //     echo "Opps, something went wrong: ";
    //     echo "<br>Error number: [$error_no]";
    //     echo "<br>Error Description: [$error_msg]";
    // }
    // set_error_handler("my_error_handler");
    // echo 5/0;

    //throw new Exception
    // function checkNum($number)
    // {
    //     if ($number>1){
    //         throw new Exception("Value must be 1 or below");
    //     }
    //     return true;
    // }
    // // checkNum(2);

    // //try-catch 
    // try{
    //     checkNum(2);
    //     echo 'if you see this the number is 1 or below';
    // }catch(Exception $e){
    //     echo 'Message '.$e->getMessage();
    // }

    //include
    // include("menu.php");
    // echo " <br>hahahah";

    //require
    // require_once    ("menu.php");
    // echo " <br>hahahah";

    //function
    // include "menu.php";
    // function writeMessage(){
    //     echo "I love myself";
    // }
    // writeMessage();

    // $test = new test();
    // echo $test->test2();
    
    // //session
    // session_start();

    // if(isset($_SESSION['counter'])){
    //     $_SESSION['counter']+=1;

    // }else{
    //     $_SESSION['counter']=1;
    // }
    // if(isset($_SESSION['tes'])){
    //     $_SESSION['tes']+=10;

    // }else{
    //     $_SESSION['tes']=10;
    // }

    // $msg = "you have visited this page ".$_SESSION['counter'];
    // $msg.= " in this page";

    // echo $_SESSION['tes']."<br>";
    // echo $msg;

    // //abort = stop
    // //destroy = reset
    // //for specific
    // unset($_SESSION['tes']);
    // //session stored on the server while cookies stored on the client 
    // //cookies

    // if(!isset($_COOKIE["username"])){
    //     setcookie("username","<br>yubert is my life",time()+30*24*60*60);
    // }else{
    //     setcookie("username","<br>yubert is not my life",time()+30*24*60*60);
    // }
    // echo $_COOKIE['username'];

    // //classes
    // class PNTraining    
    // {
    //     //constructor moy modawat sa gpasa nga parameters
    //     public function _construct(){
    //         echo 'the class "'.__CLASS__.'" was initialized';
    //     }
        
    //     public function test(){
    //         echo '<br>the class "'.__CLASS__.'" was tested';
    //     }
    // }
    // $obj = new PNTraining;

    // echo $obj->test(); //accessing a function


    //inheritance reuse ang available method from parent class
    // class student{
    //     function _construct($firstName,$lastName){
    //         $ths
    //     }
    // }
    
    // class MathStudent extends Student{
    //     function sum_numbers($n1,$n2)
    //     {
    //         $sum = $n1+$n2;
    //         echo $this->firstName . " says that " . $firstName ." ";
    //     }
    // }

    //form
        //Vl@ck48cAl?
        //rp14SIkYZ4WRPQOQ
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername,$username,$password);

    //check connection
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }else{
        echo("<h1>Connected Successfully</h1>");
    }

    $link = mysqli_connect("localhost","root","rp14SIkYZ4WRPQOQ","pntraining");

    if($link === false){
        die("ERROR: Could Not Connect".mysqli_connect_error());
    }

    $sql = "INSERT INTO persons (first_name,middle_name,last_name,email)
    VALUES ('a','b','c','d@gmail.com')";

    if (mysqli_query($link,$sql)){
        echo "record inserted succesfully";
    }else{
        echo "record not inserted succesfully";
    }
    mysqli_close($conn);
?>