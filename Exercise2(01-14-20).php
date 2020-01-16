
<html>

    <body>

        <h1 style="text-align:center">PHP Exercises</h1>

        <?php

            include "Functions(01-14-20).php";

            $Array = [1,2,3,4,5,6,7,8,9,10];

            $otherArray = ["| Back End Developer ", " | Front End Developer ", " | Network and System Administrator "];

            $multiArray = [
                "food"=>["Go", "Grow", "Glow"],
                "section" => ["sectionA" => [1 => "Yubert",2 => "Yuh Ann", 3 => "Yuh Vellen", 4 => "Ubaldo", 5 => "Andrea"],
                "sectionB" => [1 => "Joel","Richard",  "Zabdiel", "Erick", "Christoper"]],
                "ph_presidents" => ["Duterte", "Marcos", "Aguinaldo"]
            ];

            echo "<hr>1. ";
            echo sumOfTwoNum(3,4);
            echo "<hr>2. ";
            displayDataInAnArray($Array);
            echo "<hr>3. ";
            echo displayMultidimensionalArray($multiArray);
            echo "<hr>4. ";
            echo associativeArray();
            echo "<hr>5 and 6. ";
            $otherArray = addDataToAnExistingArray($otherArray," | Full Stack Developer");
            echo $otherArray;
            echo "<hr>";

        ?>

    </body>

</html>

