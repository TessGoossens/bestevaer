<?php include("ships.php");?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>     
 <style>
    
    body {
    background-color: rgb(47, 117, 158);
    padding: 30px;
    }

    main {
    background-color: azure;
    text-align: center;
    margin-top: 100px;
    padding: 20px;
    }

    footer {
    background-color: azure;
    text-align: center;
    padding: 20px;
    margin-bottom: 100px;
    }
 </style>
  </head>
    <body>
        <main>
        <h1>Schepen</h1>
        <form action="" method="post">
        <label for="schip_select">Naam schip</label>
            <select name="schip_select" id="">
                <option value="lucky star">Lucky Star</option>
                <option value="triumph">Triumph</option>
                <option value="ns angela">NS Angela</option>
                <option value="sabrina">Sabrina</option>
                <option value="hermes">Hermes</option>
            </select>
            <br><br>
            <label for="lading">Lading in Ton</label>
            <input type="text" name="lading" id="lading">
            <input type="submit" name="submit" value="Bereken">
        </form>
        <h1>Volg uw schip</h1>
        <a href="https://www.myshiptracking.com/">Klik hier om uw schip te volgen.</a>
        <?php
        if(isset($_GET["ship"]))
        {
            $name = $_GET["ship"];
            $ship = GetShip($name);
            echo "<h1>$name</h1>";
            echo "<p>Gewicht = {$ship['GT']}</p>";
            echo "<p>Inhoud = {$ship['M3']}</p>";
        }
        if(isset($_POST["submit"])) {
            $gekozen_schip = $_POST["schip_select"];
            $ship = GetShip($gekozen_schip);
            

            $max_lading = $ship['GT'];
            $nieuwe_lading = $_POST['lading'];
            echo "<h1>$gekozen_schip</h1>";
            echo "De maximale lading is: $max_lading";
            echo "<br>";
            echo "De ingevoerde lading is: $nieuwe_lading";

            $veilig = false;
            echo "<br>";
            if($max_lading >= $nieuwe_lading){
                echo "Veilig om in te laden";
            }
            else{
                echo "Het is niet veilig om te laden";
            }

            // tip van flip:
            // zoek op internet op hoe je met php de options van een select kan vullen
            // en vul je eigen select met php met de schepen uit de array
        }

        ?>
        </main>
    </body>
    <Footer>
        gemaakt door Tess Goossens 159507
    </Footer>
</html>