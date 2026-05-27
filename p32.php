<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $miesiace = array("January" => "Styczeń", "February" => "Luty", "March" => "Marzec", "April" => "Kwiecień", "May" => "Maj", "June" => "Czeriwc", "July" => "Lipiec","August" => "Sierpień", "September" => "Wrzesień", "October" => "Pażdziernik", "November" => "Listopad","December" => "Grudzień");
        $dni = array("Monday" => "Poniedziałek","Tuesday" => "Wtorek","Wednesday" => "Środa" , "Thursday" => "Czwartek", "Friday" => "Piątek", "Saturday" => "Sobota", "Sunday" => "Niedziela");


       
        $czasTeraz = time();
        $data = date("l");
        $miec = date("F");

        $dataP = $dni[$data];
        $miecP = $miesiace[$miec];
        echo"Dzisiaj jest: ".$dataP." " .date("j")." ". $miecP ." ". date("Y") ."<br>";
        echo"Czas: " .date("H:i:s", $czasTeraz)
    ?>
</body>
</html>