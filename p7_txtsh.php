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
    <form action="p7_txtsh.php" method="POST">
        <p>Wprowadź text:
            <textarea name="txt" id="txtArea"></textarea>
        </p>
        <p>Szykany wyraz: <input type = "text"  name = "szukany"/></p>
        <input type="submit" name = "Szukaj" value="Szukaj">
    </form>

    <?php
        if(isset($_POST["Szukaj"]))
            {
               
                $text = $_POST["txt"];
                $szukany = $_POST["szukany"];
                /*
                $czy = str_contains($text,$szukany);
               
                if($czy == true)
                    {
                        echo "W tekscie jest wyraz $szukany";
                    }
                else
                    {
                        echo "W tekscie nie znajduje się $szukany";
                    };
                    */
                if(str_contains($text,$szukany))
                    {
                    echo "W tekscie jest wyraz $szukany";
                    $pozycja = strpos($text,$szukany);
                    echo "<p>Szukany wyraz zajduje się na pozycji $pozycja</p>";
                    }
                else
                    echo "W tekscie nie znajduje się $szukany";
            };
    ?>
</body>
</html>