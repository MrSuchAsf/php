<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        Button:hover {
            opacity: 0.7;
            cursor: pointer;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p31.php" method = "POST">
        <p>Marka: <input type="text" name = "marka" /></p>
        <p>Model: <input type="text" name = "model" /></p>
        <p>Rocznik: <input type="number" name = "rocznik" /></p>
        <p>Cena: <input type="number" name = "cena" /></p>
        <input type="submit" value = "Button" name = "Zatwierdzenie">
    </form>

    <?php
        if(isset($_POST["Zatwierdzenie"]))
            {
                $markaAuta = $_POST["marka"];
                $modelAuta = $_POST["model"];
                $cenaAuta = $_POST["cena"];
                $rocznikAuta = $_POST["rocznik"];

                $DaneAuta = array("Marka: " => $markaAuta , "Model: " => $modelAuta , "Cena: " => $cenaAuta, "Rocznik: " => $rocznikAuta);
                 echo  "<table border = '1' >
                        <tr>
                            <th> Dane </th>
                            <th> Wartość </th>
                        </tr>";

                foreach($DaneAuta as $Dane => $wartosc)
                    {
                        echo"<tr>";
                        echo
                            "<td style = 'background-color: #53b567'>$Dane</td>
                            <td  style = 'background-color: #e88b95'> $wartosc</td> <br>";
                        echo"</tr>";
                    }
                    echo"</tr>
                    </table>";
            }
    ?>
</body>
</html>