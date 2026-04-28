<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pracownicy</h1>
    <?php
        $pracownicy = "Jan;Kowalski;Magazynier;4200*Tomasz;Nowak;Spawacz;5600*Barbara;Kwiatkowska;Księgowa;5800";
        $separator1 = ";";
        $separator2 = "*";
        $tab1 = explode($separator1,$pracownicy);
        $tab2 = explode($separator2,$pracownicy);
        echo"<table border = 1>";
        echo
        "<tr>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Stanowisko</th>
            <th>Placa</th>
        </tr>";
        for($i = 0; $i < count($tab1); $i++)
        {
           echo"<td>$tab1[$i]</td>";
        };
       echo"<tr>";
        for($j = 0; $j < count($tab2); $j++)
            { 
                echo
                "<td>
                $tab[$i]
                </td>";
            }
         echo"</tr>";
        echo"</table>";
    ?>
</body>
</html>