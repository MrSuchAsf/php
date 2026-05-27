<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p30.php" method = "POST">
        <p>Wybierz date 1: <input type="date" name="data1"></p>
        <p>Wybierz date 2: <input type="date" name="data2"></p>
        <input type="submit" name="asd" value="Ile dni pozostalo">
    </form>

    <?php
        if(isset($_POST["asd"]))
            {
                $podanaData1 = $_POST["data1"];
                $podanaData2 = $_POST["data2"];
                $podanaDataCzas1 = strtotime($podanaData1);
                $podanaDataCzas2 = strtotime($podanaData2);
                
                if($podanaDataCzas1 > $podanaDataCzas2){
                       $roznicaCzasow = round(($podanaDataCzas1 - $podanaDataCzas2)/60/60/24);
                        echo"Od dnia ".date("Y-m-d",$podanaDataCzas1)." upłyneło  $roznicaCzasow dni" ; 
                    }
                else{
                     $roznicaCzasow = (round($podanaDataCzas2 - $podanaDataCzas1)/60/60/24);
                        echo"Do dnia ".date("Y-m-d",$podanaDataCzas2)." pozostalo $roznicaCzasow dni";         
                               
                }
            }
    ?>
</body>
</html>