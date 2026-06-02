<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p34.php" method = "POST">
        <p><input type="text" name = "daneUcznia" /></p>
        <input type="submit" name="asd" value = "Zapisz">
    </form>

    <?php
        if(isset($_POST["asd"]))
            {
                $dane = htmlspecialchars(trim($_POST["daneUcznia"]));
                $separ = "*";

                $tab = explode($separ,$dane);
                if(empty($dane))
                    {
                         echo"<p>Input nie może być pusty  </p>";
                    }  
                    else
                    {
                        echo"<ul>";
                        foreach($tab as $uczen)
                            {
                                echo"
                                <li style = ''>
                                 $uczen
                                </li>";
                                
                            }
                            echo"</ul>";
                    }
                    
            }
    ?>
</body>
</html>