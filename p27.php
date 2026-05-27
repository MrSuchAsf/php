<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
  
    echo"Czas w Polsce" ."<br>";
        echo"Czas jest ".date("h:i:s a")."<br>";
        
        echo"Data jest ".date("Y-m-d")."<br>";

        date_default_timezone_set("America/New_York")."<br>";
        echo"Czas W Ameryce" ."<br>";
        echo"Czas jest ".date("h:i:s a")."<br>";
        
        echo"Data jest ".date("Y-m-d")."<br>";

        date_default_timezone_set("Europe/Kyiv")."<br>";
         echo"Czas jest ".date("h:i:s a")."<br>";
        
        echo"Data jest ".date("Y-m-d")."<br>";


        $wakacje = mktime(0,0,0,6,27,2026);
        echo"Wakacje zaczynają się ". date("Y-m-d, H:i:s",$wakacje)."<br>";
        echo"Czas: ".time();
        ?>

        
</body>
</html>