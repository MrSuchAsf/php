<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <h1>Skrypt szukający text</h1>
    <form action="p11_palindrom.php" method="POST">
        <p>Wprowadź text:
            <input type="text" name="txt"></input>
        </p>
        <input type="submit" name = "Szukaj" value="Szukaj">
    </form>

    <?php
        if(isset($_POST["Szukaj"]))
            {
            $text = trim(strtolower($_POST["txt"]));
            $revers = strrev($text);
            echo"Tekst po rev: $revers";
            if($text == $revers)
                echo"<p>To jest palinfrom</p>";
                else
                    echo"<p>To nie jest palindrom</p>";
                
            };
    ?>
</body>
</html>