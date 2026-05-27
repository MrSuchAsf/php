<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $wakacje =  strtotime("2026-06-27");
                    //mktime(0,0,0,6,27,2026);
        echo"Wakacje zaczynają się ". date("Y-m-d, H:i:s",$wakacje)."<br>";
        $dzisiaj = time();
        echo"Dzisiaj jest: ".date("Y-m-d, H:i:s",$dzisiaj)."<br>";

        $pozostaloSekundDoWakacji = $wakacje - $dzisiaj;
        echo"Ilosc sekund fo wakacji: $pozostaloSekundDoWakacji" ."<br>";

        $podostaloDniDoWakacji = $pozostaloSekundDoWakacji/60/60/24;
        echo"Ilosc dzi do wakacji: ".round($podostaloDniDoWakacji);
    ?>
</body>
</html>