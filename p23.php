<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
        $a = intval($_POST["imie"]);
        if(isset($_POST["asd"]))
            {
                $a++;
            }

        elseif(isset($_POST["asd2"]))
        { 
            $a--;
        }
        elseif(isset($_POST["asd3"]))
        {
            $a = 0;
        }
    ?>
    <form action="p23.php" method = "POST">
        <p>Licznik: <input type="number" name = "imie" value = "<?php echo $a ?>"></p>
        <input type = "submit" name = "asd" value = " + ">
        <input type = "submit" nam = "asd2" value = " - ">
        <input type = "submit" name = "asd3" value = " 0 ">
    </form>   
</body>
</html>