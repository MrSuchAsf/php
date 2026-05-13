<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p19.php" method = "POST">
        <p>Wpisz liczbę <input type="number" name = "liczba"/></p>
        <input type="submit" name="asd" value = "CzyPierwsza"/>
    </form>

    <?php
        if(isset($_POST["asd"]))
            {
                $liczba = intval($_POST["liczba"]);
                if(pierw($liczba))
                    echo"<p style = 'color: red'>To jest liczba pierwsza</p>";
                    else
                    echo"<p style = 'color: green'>To nie jest liczba pierwsza</p>";
            };

            function pierw($a)
            {
                if($a < 2)
                    {
                        return false;
                    };
                for($i = 2; $i < $a; $i++)
                    {
                        if($a % $i == 0)
                            {
                                return false;
                            }
                    };
                return true;
            };
    ?>
</body>
</html>