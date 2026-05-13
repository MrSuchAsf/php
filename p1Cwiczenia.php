<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p1Cwiczenia.php" method = "POST">
        <p>a<input type="number" name = "a"></p>
        <p>b<input type="number" name = "b"></p>
        <p>c<input type="number" name = "c"></p>
        <input type="submit" name = "qwe" value = "Zobacz wynik">
    </form>
    <?php
        if(isset($_POST["qwe"]))
            {
                $a = floatval($_POST["a"]);
                $b = floatval($_POST["b"]);
                $c = floatval($_POST["c"]);
                $wynik1 = 0;
                $wynik2 = 0;
                $wynik3 = 0;
                $odp = delta($a,$b,$c);
                echo "Wynik delty: $odp <br>";

                if($odp > 0)
                    {
                        $wynik1 = ((-$b) - sqrt($odp)) / (2 * $a);
                        $wynik2 = ((-$b) + sqrt($odp)) / (2 * $a);
                        echo"Pierwiastkami są: $wynik1 , $wynik2";
                    }
                elseif($odp == 0)
                    {
                        $wynik3 = (-$b) / (2 * $a);
                        echo"Pierwiastkiem jest $wynik3";
                    }
                else
                    {
                     if($odp < 0)
                        {
                            echo"Niema pierwiastków";
                        }
                    }
            }
            function delta($a,$b,$c)
            {
                $wynik = ($b * $b) - (4 * $a * $c);
                return $wynik;
            }

            
    ?>
</body>
</html>