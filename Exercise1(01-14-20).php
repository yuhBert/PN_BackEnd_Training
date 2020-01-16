<html>
<style>
body{
  background-image: url('http://getwallpapers.com/wallpaper/full/4/9/d/1080843-most-popular-light-blue-backgrounds-2400x1800-720p.jpg');
}
</style>
    <body>
    <h1 style="color:red;text-align:center">Answers</h1>
        <?php
        
        $color = array("white","green","red","blue","black");
            echo "<hr>The memory of that scene for me is like a frame of film forever frozen at that moment: 
                the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady.
            - Richard M. Nixon<br><hr>";

        $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
            "Finland"=>"Helsinki", "France" => "Paris","Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
            "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
            "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin","Hungary"=>"Budapest",
            "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

            foreach($ceu as $capital => $capitalCity) {
                echo "The capital city of " . $capital ." is ".$capitalCity."<br>";
            }
            echo '<hr>';

        $x = array(1, 2, 3, 4, 5);
            unset($x[1]);
            $x = array_values($x);
            print_r($x);
            echo '<hr>';

        ?>
    </body>

</html>