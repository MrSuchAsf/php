<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p2Cwiczenie.php" method = "POST">
        <p>Imie:<input type="text" name = "imie"></p>
        <p>Nazwisko:<input type="text" name = "nazwisko"></p>
        <p>Stanowisko:<input type="text" name = "stanowisko"></p>
        <p>Placa:<input type="number" name = "placa"></p>
        <p>Język:
            <input type="checkbox" id = "je" name = "jezyk1">
            <label for = "je" name = "angl">Angielski</label>
            <input type="checkbox" id = "ja" name = "jezyk2">
            <label for = "ja">Niemiecki</label>
            <input type="checkbox" id = "ju" name = "jezyk3">
            <label for = "ju">Hiszpański</label>
        </p>
        <p>Wykształcenie:
            <input type="radio" id = "r1" name = "wyszt1">
            <label for = "r1"  name = "we">Podstawowe</label>
            <input type="radio" id = "r2" name = "wyszt">
            <label for = "r2">Średnie</label>
            <input type="radio" id = "r3" name = "wyszt">
            <label for = "r3">Wyższe</label>
        </p>
        <input type="submit" name = "zapis" value = "Zapisz">
    </form>

    <?php
        if(isset($_POST["zapis"]))
            {
                $imie = $_POST["imie"];
                $nazwisko = $_POST["nazwisko"];
                $stanowisko = $_POST["stanowisko"];
                $placa = $_POST["placa"];
                if(isset($_POST["jezyk1"]))
                {
                    $jezyk = $_POST["angl"];
                }
                    
                
               if(isset($_POST["wyszt1"]));
               {
                    $wyksztal = $_POST["wyszt1"];
                    
               }
                echo"<table border = 1>";
               echo "<tr><th>Imie</th><th>Nazwisko</th><th>Stanowisko</th><th>Placa</th><th>Język</th><th>Wyksztalcenie</th></tr>";
               echo"<td>$imie</td> <td>$nazwisko</td> <td>$stanowisko</td> <td>$placa</td> <td>$jezyk</td> <td>$wyksztal</td>";
               echo"</table>";
            }
    ?>
</body>
</html>