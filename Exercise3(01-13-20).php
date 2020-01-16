<?php 
 //Question Number 3
 echo 'Answers'.'<br>';
 echo '3. ';
 
 echo 'For Loop <br>';
 for($num = 1; $num <=7 ;$num++){
    for($num1 = 1; $num1<=$num; $num1++){
        echo "*";
    }
    echo "<br>";
 }
 
 echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;While Loop <br>';
 $num = 0 ;
while($num<=7){
    echo str_repeat("*",$num);
    $num++;
    echo "<br>";
 }
?>