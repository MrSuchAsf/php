<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method = "POST">
    <p>Imiona: <input type="text" name="imiona" required></p>
    <input type="submit" name="asd">
    </form>
    <?php
    if(isset($_POST["asd"]))
        {
            $a = htmlspecialchars(trim($_POST["imiona"]));
            $b = 0;
            $separ = "*";
            $tab = explode($separ,$a);
            sort($tab);
           echo"<br>
                <table border = '1'>
                <tr style = 'border: red'>
                    <th style = 'color: red'>Imiona</th>
                </tr>";
                foreach($tab as $x)
                    {
                    echo"<tr> 
                            <td>
                               $x
                            </td>
                        </tr>";   
                    }
            echo "<table>";
        }
    ?>
</body>
</html>