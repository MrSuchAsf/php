<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p15.php" method = "POST">
        <p><input type="text" name = "text"/></p>
        <input type="submit" name = "sprawdz" value = "Rozdziel">
    </form>
    <?php
        if(isset($_POST["sprawdz"]))
        {   
            $liczba = 0;
            $Pierwszych = 0;
            
            $text = $_POST["text"];
            $separator = "*" ;
           
            $tab = explode($separator,$text);
            for($i = 0; $i < count($tab); $i++)
                {
                    $liczba = intval($tab[$i]);
                   
                    if(pierw($liczba))
                    {
                        echo "<span style = 'color: red'>".$liczba.", "."</span>";
                        $Pierwszych++;
                    }
                    else
                    {
                        echo "<span style = 'color: black'>".$liczba.", "."</span>";
                    }
                }
                
                echo "Liczb pierwszych: ".$Pierwszych; 
         };

        function pierw($a)
        {
            if($a < 2)
            {
            return false;
            }
            for($i = 2; $i < $a; $i++)
            {
                if($a % $i == 0)
            {
            return false;
            }
        }
        return true;
        } 
    ?>
</body>
</html>