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
    <h1>Skrypt szukający text</h1>
    <form action="p10_zamiana.php" method="POST">
        <p>Wprowadź text:
            <textarea name="txt" id="txtArea"></textarea>
        </p>
        <p>Po podmiany wyraz: 
            <input type = "text"  name = "szukaj"/>
        </p>
        <p>Podmień wyraz: 
            <input type = "text"  name = "zmien"/>
        </p>
        
        <input type="submit" name = "Szukaj" value="Szukaj">
    </form>

    <?php
        if(isset($_POST["Szukaj"]))
            {
            $text = $_POST["txt"];
            $szukany = $_POST["szukaj"];
            $zamiana = $_POST["zmien"];

            $zmodyfi = str_replace($szukany,$zamiana,$text);

            echo "Tekst po zmianie: ";
            echo "$zmodyfi";

            };
    ?>
</body>
</html>