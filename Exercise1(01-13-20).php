<?php

//Question Number 1
echo 'Answers'.'<br>';
echo '1. ';

echo 'For Loop = ';
for($num = 1; $num <=15 ; $num++){
	if ($num < 15 ){
		echo "$num-";	
	}else{
		echo "$num ";
	}
}

echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;While loop = ';
$n = 1;
while($n <= 15){
	if($n < 15){
		echo "$n-";
		$n++;
	}else{
		echo "$n ";
		$n++;
	}
}

echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Do-While loop = ';
$n = 1;

do{
	if($n < 15){
		echo "$n-";
		$n++;
	}else{
		echo "$n ";
		$n++;
	}
}while($n <= 15);

?>