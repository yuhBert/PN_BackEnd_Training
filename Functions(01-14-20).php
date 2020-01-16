<?php

    //sum of two numbers
    function sumOfTwoNum($num1,$num2)
    {
        return $num1+$num2;
    }
    //display the data in an array
    function displayDataInAnArray($array)
    {
        foreach ($array as $newArray){
        echo("$newArray ");
        }
    }
    //display the data in a multidimensional array
    function displayMultidimensionalArray($multiArray)
    {
        print_r($multiArray)." ";       
    }
    //display the data in an associative array
    function associativeArray()
    {
        $associativeArray = array("Yuh Ann" => 22, "Yubert" => 20, "Yuh Vellen" => 18);
        foreach ($associativeArray as $x => $newArray)
        {
            echo " | Name: ".$x." is ".$newArray." years old";
        }
    }
    //add data to an existing array and then display it
    function addDataToAnExistingArray($array, $data)
    {
        array_push($array,$data);
        foreach($array as $newArray)
        {
            echo $newArray;
        }
    }

?>

