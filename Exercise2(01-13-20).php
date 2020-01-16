<?php 
    //Question Number 2
echo 'Answers'.'<br>';
echo '2. ';

echo 'For Loop';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divisible by 2 = ';
for($num = 1; $num <=15 ; $num++){
    if($num % 2 == 0){
        echo "$num ";
    } 
}
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divisible by 3 = ';
for($num = 1; $num <=15 ; $num++){
    if($num % 3 == 0){
        echo "$num ";
    } 
}
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divisible by 5 = ';
for($num = 1; $num <=15 ; $num++){
    if($num % 5 == 0){
        echo "$num ";
    } 
}

echo '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;While Loop';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divisible by 2 = ';

$num = 1;
while($num <= 14){
    $num++;
    if ($num%2==0){
    	echo "$num ";
    }
} 
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divisible by 3 = ';
$num = 1;
while($num <= 14){
    $num++;
    if ($num%3==0){
    	echo "$num ";
    }
} 
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divisible by 5 = ';
$num = 0;
while($num <= 14){
    $num++;
    if ($num%5==0){
    	echo "$num ";
    }
} 


echo '<br><br>';
function isDivisible($count){
    echo "Divisible by $count <br>";
    for($i = 1 ; $i <= 15 ; $i++){
    if ($i % $count == 0){
    echo $i . "<br>";
    }
    }
    }
    isDivisible(2);
    isDivisible(3);
    isDivisible(5);

?>