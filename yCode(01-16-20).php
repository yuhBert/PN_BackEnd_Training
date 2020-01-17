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

function removeValue($element, $array)
            {
                $index = array_search($element, $array);
                if($index !== false)
                {
                    unset($array[$index]);
                }

                echo implode(" ",$array);
            }
                

           

?>