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
<!--Napisz sktypt w którym pobierającym liczbę wierszy i liczby kolumn następnie po ptzesłaniu dannych
 skrypt rysuję tabelę html o przesłanych wymiarach a do komórek wpisuje iloczyn indeksów wiersz * kolumna. Sformatuj tą tablicę w stylach css tak aby miała obramowanie
 wszystkich komórek i miały tę samą szerokość i wysokość = 20px a zawartość była wyrównana w pionie i poziomie. Dalej pokoloruj komórki w załeżności od wartości która znajduje się w komórce 
 parzysta = background-color = yellow jeśli nie to green
 
 Wykonaj skrypt w którym narysowano tablicę html o rozmiarze 10 na 10 wpisano do niej liczby od 1 do 100 a tło komórek w której znajduje się liczba pierwsza pokolorowana jest na niebiesko
 
 -->

 <form action="p17.php" method = "POST">
    <p>Wpisz Wiersze<input type="number" name = "wierz"></p>
    <p>Wpisz Kolumny<input type="number" name = "kolumn"></p>
    <input type="submit" name = "zatw" value = "Zrób">
 </form>

 <?php
    if(isset($_POST["zatw"]))
        {
          $X = $_POST["wierz"];
          $Y = $_POST["kolumn"];
          
          echo"<table border = 1>";
            for($i = 1 ; $i <= $X; $i++)
                {
                    echo "<tr>";
                   
                     for($j = 1; $j <= $Y; $j++)
                    {
                        $wynik = $i * $j;
                        if($wynik % 2 == 0)
                        echo"<td style = 'background-color: green'>$wynik<td>";
                        else
                        echo"<td style = 'background-color: yellow'>$wynik<td>";   

                    }
                    echo "</tr>";
                } 
                echo"</table>";
           
        }
 ?>
</body>
</html>