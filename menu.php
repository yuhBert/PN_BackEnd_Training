<?php
// $menu = "sample";
// echo $menu;

    class test{
        function writeMessage()
        {
            echo " that's all I want<br>";
        }

        function test2()
        {
            $this->writeMessage();
        }

    }
    //pass by reference
    function addFive(&$num)
    {
        $num +=5;
    }

    $orig = 10;
    addFive($orig);
    echo "the value is $orig <br>";

    //dynamic function call
    function sayHello($name)
    {
        echo "hello ".$name."<br />";
    }
    $holder = "sayhello";
    $holder("yubert");
?>
<!-- <a>Google<a>
<a>facebook<a>
<a>gamecity<a> -->