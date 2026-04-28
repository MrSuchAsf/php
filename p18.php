<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       table
       {
        border: 1px solid black;
       }
        tr,td{
         border: 1px solid black;
         text-align: center;
    }
       
    </style>
</head>
<body>
<!--Napisz sktypt w którym pobierającym liczbę wierszy i liczby kolumn następnie po ptzesłaniu dannych
 skrypt rysuję tabelę html o przesłanych wymiarach a do komórek wpisuje iloczyn indeksów wiersz * kolumna. Sformatuj tą tablicę w stylach css tak aby miała obramowanie
 wszystkich komórek i miały tę samą szerokość i wysokość = 20px a zawartość była wyrównana w pionie i poziomie. Dalej pokoloruj komórki w załeżności od wartości która znajduje się w komórce 
 parzysta = background-color = yellow jeśli nie to green
 
 Wykonaj skrypt w którym narysowano tablicę html o rozmiarze 10 na 10 wpisano do niej liczby od 1 do 100 a tło komórek w której znajduje się liczba pierwsza pokolorowana jest na niebiesko
 
 -->

 

 <?php
        $licz = 1;
        echo"<table>";
        for($i = 1 ; $i <= 10; $i++)
            {
                echo "<tr>";
            
                for($j = 1; $j <= 10; $j++)
                { 
                    if(pierw($licz))
                    echo "<td style = 'background-color: rgb(32, 250, 250)'>".$licz."</td>";
                    else
                    echo "<td>".$licz."</td>";
                    $licz++;
                };
                echo "</tr>";
            } 
            echo"</table>";
    
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