<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method = "POST">
    <p>Liczby: <input type="text" name="liczby" required></p>
    <input type="submit" name="asd">
    </form>
    <?php
    if(isset($_POST["asd"]))
        {
            $a = htmlspecialchars(trim($_POST["liczby"]));
            $b = 0;
            $separ = ";";
            $tab = explode($separ,$a);
                foreach($tab as $x)
                    {
                        $b += $x;
                        
                    }
            echo "Suma: ".$b;
        }
    ?>
</body>
</html>