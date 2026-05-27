<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p29.php" method = "POST">
        <p>Wybierz date: <input type="date" name="data"></p>
        <input type="submit" name="asd" value="Ile dni pozostalo">
    </form>

    <?php
        if(isset($_POST["asd"]))
            {
                $podanaData = $_POST["data"];
                echo"Wybrana data: ".$podanaData."<br>";
                $podanaDataCzas = strtotime($podanaData);
                $aktualnyCzasSystemowy = time();
                if($aktualnyCzasSystemowy < $podanaDataCzas){
                       $roznicaCzasow = round(($podanaDataCzas - $aktualnyCzasSystemowy)/60/60/24);
                        echo"Do dnia ".date("Y-m-d",$podanaDataCzas)." pozostalo $roznicaCzasow dni" ; 
                    }
                else{
                     $roznicaCzasow = (round($aktualnyCzasSystemowy -$podanaDataCzas)/60/60/24);
                        echo"OD dnia ".date("Y-m-d",$podanaDataCzas)." upłyneło $roznicaCzasow dni";         
                               
                }
            }
    ?>
</body>
</html>