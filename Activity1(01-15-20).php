<html>
    <style>
        h1{
            text-align: center;
            color: red;
        }
    </style>
    <body>
    
        <hr>
        <h1>PHP Exercises - Part 1</h1>
        <hr>

        <?php
           
           function factorial ($number)  
           {  
               if($number <= 1)   
               {  
                   return 1;  
               }  
               else   
               {  
                   return $number * factorial($number - 1);  
               }  
           }    
         
           echo "1. ";
           echo factorial(5); 
           echo "<hr>";

        ?>
        
        <table width="180px" border="15px">
            <?php
                function cheesBoard(){
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
                echo "2. ";
                cheesBoard();
            ?>
        </table>

        <?php
           
            function removeValue($element, $array)
            {
                $index = array_search($element, $array);
                if($index !== false)
                {
                    unset($array[$index]);
                }

                echo implode(" ",$array);
            }
                
            $month = ["January", "February","March","April","May","June","July","August","September","October","November","December"];   
            echo "<hr>3.<br>";
            removeValue('January', $month);
            echo "<hr>4.<br>";
    
             
        ?>

        <table width="180px" border="2px">
            <?php
                function displayStrings($name,$salary)
                {
            
                    for($col=1;$col<=2;$col++)
                    {
                        if($col==1)
                        {
                            echo "<td height=15px width=15px bgcolor=#FFFFFF>$name</td>";
                        }else{
                            echo "<td height=15px width=15px bgcolor=#FFFFFF>$salary</td>";
                        }
                    }
                    echo "</tr>";
                    
                }
                displayStrings("NAME","SALARY");
                displayStrings("Yubert",100);
                displayStrings("Yuh Ann",500);
                    
            ?>
        </table>

        <?php

            $d = 'A00';
            function arithOperation()  
            {
                global $d;
                    for ($n=0; $n<5; $n++){
                        echo ++$d ."<br>";
                    }
            } 
            
            echo "<hr>5.<br>";
            arithOperation();
            echo "<hr>6. ";

            $filename = basename("Activity1(01-15-20).php");
            $lastModified = filemtime($filename); 
            echo "<br>Filename : $filename <br>Last Modified Date : ";
            echo "Last modified " . date("l, dS F, Y, h:ia", $lastModified)."\n";
            
            echo "<hr>7. ";

            function changeColor($text)
            {
                return preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
            }
            echo changeColor("PN Training");
            echo "<br>";
            echo changeColor("Yubert Mariscal");
           
        ?>
        
         
    </body>
</html>


