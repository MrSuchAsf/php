<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p13.php" method = "POST">
        <p><input type="text" name = "text"/></p>
        <p><input type="text" name = "separ"/></p>
        <input type="submit" name = "sprawdz" value = "Rozdziel">
    </form>
    <?php
        $text = $_POST["text"];
        $separator = $_POST["separ"];
                echo "<table border = 1>";
                echo"<tr><th>Samochody</th></tr>";
        $tab = explode($separator,$text);
        for($i = 0; $i < count($tab); $i++)
            {
                
                    echo"<tr><td>$tab[$i]</td></tr>";
                
            }
                    echo"</table>";
                   
    ?>
</body>
</html>