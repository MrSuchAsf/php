<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
        <p><input type="date" name = "data"></p>
        <input type="submit" name="asd">
    </form>
    <?php
       $miesiace = array("January" => "Styczeń", "February" => "Luty", "March" => "Marzec", "April" => "Kwiecień", "May" => "Maj", "June" => "Czeriwc", "July" => "Lipiec","August" => "Sierpień", "September" => "Wrzesień", "October" => "Pażdziernik", "November" => "Listopad","December" => "Grudzień");
        $dni = array("Monday" => "Poniedziałek","Tuesday" => "Wtorek","Wednesday" => "Środa" , "Thursday" => "Czwartek", "Friday" => "Piątek", "Saturday" => "Sobota", "Sunday" => "Niedziela");

        if(isset($_POST["asd"]))
            {
        $dataWybrana = $_POST["data"];
        $a = strtotime($dataWybrana);
        $data = date("l",$a);
        $miec = date("F",$a);

        $dataP = $dni[$data];
        $miecP = $miesiace[$miec];
        echo"Wybrałeś datę:  ".$dataP." " .date("j",$a)." ". $miecP ." ". date("Y",$a) ."<br>";
        
            }
    ?>
</body>
</html>