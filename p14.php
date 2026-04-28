<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p14.php" method = "POST">
        <p><input type="text" name = "text"/></p>
        <input type="submit" name = "sprawdz" value = "Rozdziel">
    </form>
    <?php
        if(isset($_POST["sprawdz"]))
        {   
            $liczba = 0;
            $wynik = 0;
            $text = $_POST["text"];
            $separator = ";" ;
           
            $tab = explode($separator,$text);
            for($i = 0; $i < count($tab); $i++)
                {
                    $liczba += intval($tab[$i]);
                    $wynik++;
                }
                $WYnik = $liczba / $wynik;
                echo $WYnik; 
         }
    ?>
</body>
</html>