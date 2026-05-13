<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="p22.php" method = "POST">
    <p>A: <input type = "number" name = "a" /></p>
    <p>B: <input type = "number" name = "b" /></p>
    <p>C: <input type = "number" name = "c" /></p>
    <input type="submit" name="asd" value = "Delta">
</form>
    <?php
        include "funkcje.php";

        if(isset($_POST["asd"]))
            {
              $a = intval($_POST["a"]);
              $b = intval($_POST["b"]);
              $c = intval($_POST["c"]);
                    $delta = Delta($a,$b,$c);
              echo"Wynik Delty: ".$delta;
                if($delta < 0)
                    echo" <br> Niema pierwiastków";
                elseif ($delta == 0)
                    {
                    $wynik0 = (-$b) / (2 * $a);
                    echo" <br> Pierwiastkiem jest ".$wynik0;
                    }
                elseif ($delta > 0)
                    {
                        $wynik1 = (-$b) + sqrt($delta) / (2 * $a);
                        $wynik2 = (-$b) - sqrt($delta) / (2 * $a);
                    echo" <br> Pierwiastkiem jest ".$wynik1. " i " . $wynik2;
                    }
            }
    ?>
</body>
</html>