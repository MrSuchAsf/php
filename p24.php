<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="p24.php" method="post">
<p><input type="number" name="a"></p>
<p><input type="number" name="b"></p>
<p><input type="number" name="c"></p>
<input type="submit" name="asd" value = "Oblicz">
</form>

<?php
if(isset($_POST["asd"]))
{
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

$x0 = 0;
$x1 = 0;
$x2 = 0;

    $delta = PierwiastkiRownaniaKwadratowego($a, $b, $c, $x0, $x1, $x2);
    echo"Wynik delty: $delta <br>";
    if($delta == 0)
        {
            echo"Wynik delty: $x0";
        }
    elseif ($delta > 0)
        {
            echo "Wynik pierwiastków: $x1 , $x2";
        }
}
    function PierwiastkiRownaniaKwadratowego($a , $b , $c ,&$x0, &$x1 , &$x2)
    {
        $wynik = ($b * $b) - (4 * $a * $c);
        if($wynik == 0)
            {
                $x0 = -$b / (2 * $a);
            }
        elseif ($wynik < 0)
            {
                echo "Niema pierwiastków";
            }
        elseif($wynik > 0)
            {
                $x1 = (-$b + sqrt($wynik)) / (2 * $a);
                $x2 = (-$b - sqrt($wynik)) / (2 * $a);
            }
            return $wynik;
    }
?>
</body>
</html>