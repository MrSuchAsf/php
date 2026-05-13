<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p3Cwiczenie.php" method = "POST">
        <p><input type="text" name = "liczby"></p>
        <p><input type="text" name="separator"></p>
        <input type="submit" name="akc" value = "Sprawdź">
    </form>

    <?php
        if(isset($_POST["akc"]))
            {
                $liczby = $_POST["liczby"];
                $separ = $_POST["separator"];
                $tab = explode($separ,$liczby);

                for($i = 0; $i < count($tab); $i++)
                    {
                        echo"Maksymalna liczba: ". (max($i));
                        echo"Minimalna liczba: ". (min($i));
                    }
            }
        ?>
</body>
</html>