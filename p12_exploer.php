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
    <h1>Rozdziel wyrazy</h1>
    <form action="p12_exploer.php" method="POST">
        <p>Wprowadź text:
            <input type="text" name="txt"></input>
        </p>
        <p>Wprowadź separator:
            <input type="text" name="separ"></input>
        </p>
        <input type="submit" name = "Rozdziel" value="Rozdziel">
    </form>

    <?php
        if(isset($_POST["Rozdziel"]))
            {
                $rozdziel = $_POST["txt"];
                $separ = $_POST["separ"];

                $tab = explode($separ,$rozdziel);

                for($i = 0; $i < count($tab); $i++)
                    {
                        //echo "wyraz $i: ".$tab[$i]. "<br>";
                        echo
                        "<ul>".
                        "<li> Wyraz: $i:  $tab[$i] </li> <br>"
                        ."</ul>"; 
                    };
            };
    ?>
</body>
</html>
    
