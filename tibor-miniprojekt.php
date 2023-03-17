<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                background-color: rgb(44, 115, 148);
            }
            .item1
            {
                text-align: start;
                grid-area: header;
                color: rgb(44, 115, 148);
                background-color: #80b6c4;
                font-size: 30px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .item2 {
                grid-area: section;
                color: rgb(44, 115, 148);
                background-color: #80b6c4;
                font-size: 15px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .item3 {
                grid-area: article;
                color: rgb(44, 115, 148);
                background-color: #80b6c4;
                font-size: 15px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .item4 {
                grid-area: aside;
                color: rgb(44, 115, 148);
                background-color: #80b6c4;
                font-size: 15px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .item5 {
                grid-area: footer;    
                color: rgb(44, 115, 148);
                background-color: #80b6c4;
                font-size: 15px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .item6 {
                grid-area: address;
                color: rgb(44, 115, 148);
                background-color: #80b6c4;
                font-size: 10px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .grid-container {
                display: grid;
                grid-template-areas:
                'header header header header header header'
                'section article article article aside aside'
                'footer footer footer footer footer address';

            }
            .grid-container-header > div {
                border-radius: 5px;
                opacity: 75%;
                padding-left: 20px;
                padding-top: 20px;
                padding-right: 20px;
                padding-bottom: 10px;
                margin-top: 10px;
                margin-bottom: 20px;
                margin-left: 10px;
                margin-right: 10px;
            }
            .grid-container > div {
                border-radius: 5px;
                opacity: 75%;
                padding-left: 20px;
                padding-top: 20px;
                padding-right: 20px;
                padding-bottom: 20px;
                margin-top: 10px;
                margin-bottom: 10px;
                margin-left: 10px;
                margin-right: 10px;
            }
            a:link {
                border: 0px solid #80b6c4;
                border-radius: 5px;
                color: black;
                background-color: rgb(44, 115, 148);
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
                opacity: 100%;
                text-decoration: none;
                padding-left: 20px;
                padding-top: 10px;
                padding-right: 20px;
                padding-bottom: 10px;
                margin-top: 10px;
                margin-bottom: 10px;
                /*margin-left: 10px;*/
                margin-right: 10px;
            }
            a:visited {
                border: 0px solid #80b6c4;
                border-radius: 5px;
                color: purple;
                background-color: rgb(44, 115, 148);
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
                opacity: 100%;
                text-decoration: none;
                padding-left: 20px;
                padding-top: 10px;
                padding-right: 20px;
                padding-bottom: 10px;
                margin-top: 10px;
                margin-bottom: 10px;
                /*margin-left: 10px;*/
                margin-right: 10px;
            }
            a:hover {
                border: 0px solid #80b6c4;
                border-radius: 5px;
                color: white;
                background-color: rgb(44, 115, 148);
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
                opacity: 100%;
                text-decoration: none;
                padding-left: 20px;
                padding-top: 10px;
                padding-right: 20px;
                padding-bottom: 10px;
                margin-top: 10px;
                margin-bottom: 10px;
                /*margin-left: 10px;*/
                margin-right: 10px;
            }
            a:active {
                border: 0px solid #80b6c4;
                border-radius: 5px;
                color: red;
                background-color: rgb(44, 115, 148);
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
                opacity: 100%;
                text-decoration: none;
                padding-left: 20px;
                padding-top: 10px;
                padding-right: 20px;
                padding-bottom: 10px;
                margin-top: 10px;
                margin-bottom: 10px;
                /*margin-left: 10px;*/
                margin-right: 10px;
            }
            .elefant {
                width: 250px;
                height: 200px;
                background-color: white;
                border-radius: 5px;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                padding-right: 10px;
                cursor: none;
            }
            th {
                width: 180px;
                text-align: left;
                cursor: not-allowed;
                border: 2px solid rgb(44, 115, 148);
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                padding-right: 10px;
            }
            td {
                width: 180px;
                cursor: not-allowed;
                border: 2px solid rgb(44, 115, 148);
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                padding-right: 10px;
            }
            #main {
                text-align: start;
                font-size: 20px;
            }
            input {
                border: 0px;
                border-radius: 5px;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
                color: black;
                background-color: rgb(44, 115, 148);
                margin-top: 10px;
                margin-bottom: 10px;
                margin-left: 10px;
                margin-right: 10px;
            }
            input:hover {
                border: 0px;
                border-radius: 5px;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
                color: white;
                background-color: rgb(44, 115, 148);
                margin-top: 10px;
                margin-bottom: 10px;
                margin-left: 10px;
                margin-right: 10px;
            }
            table {
                border: 0px;
                border-radius: 5px;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
                color: black;
                background-color: rgb(44, 115, 148);
                width: 100%;
            }
        </style>
        <title>Tibor-Miniprojekt</title>
    </head>
    <body>
        <div class="grid-container-header">
                <div class="item1">
                    <div>        
                        <a href="https://de.wikipedia.org/wiki/Pferd">Cola</a>
                        <a href="https://de.wikipedia.org/wiki/Kuh">Sinalco</a>
                        <a href="https://de.wikipedia.org/wiki/Esel">Bier</a>
                    </div>
                    <h2>Lieblingsgetraenke</h2>
                </div>
        </div>     
        <div class="grid-container">
                <div class="item2">
                    <?php
                        $Getraenke = array
                        (
                            array
                            (
                                "Bezeichnung"=>"Cola", "Menge"=>"1", "Preis"=>"2 CHF"
                            ),
                            array
                            (
                                "Bezeichnung"=>"Fanta", "Menge"=>"1", "Preis"=>"2 CHF"
                            ),
                            array
                            (
                                "Bezeichnung"=>"Sprite", "Menge"=>"1", "Preis"=>"2 CHF"
                            ),
                            array
                            (
                                "Bezeichnung"=>"Flauder", "Menge"=>"1", "Preis"=>"2 CHF"
                            ),
                            array
                            (
                                "Bezeichnung"=>"HalbHalb", "Menge"=>"1", "Preis"=>"2 CHF"
                            ),
                            array
                            (
                                "Bezeichnung"=>"RedBull", "Menge"=>"1", "Preis"=>"2 CHF"
                            ),
                            array
                            (
                                "Bezeichnung"=>"Shorley", "Menge"=>"1", "Preis"=>"2 CHF"
                            ),
                            array
                            (
                                "Bezeichnung"=>"Sinalco", "Menge"=>"1", "Preis"=>"2 CHF"
                            ),
                            array
                            (
                                "Bezeichnung"=>"Wasser", "Menge"=>"1", "Preis"=>"2 CHF"
                            ),
                            array
                            (
                                "Bezeichnung"=>"Eistee", "Menge"=>"1", "Preis"=>"2 CHF"
                            ),
                        );

                        echo "
                        <div class='item1'>
                            <b>Getraenkeauswahl</b>
                        </div>
                        <br>";
                        echo"<table>
                        <tr>
                            <th>Bezeichnung</th>
                            <th>Menge</th>
                            <th>Preis</th>
                        </tr>";
                        foreach($Getraenke as $Getraenk)
                        {
                            echo 
                            "<tr>
                                <td>".$Getraenk["Bezeichnung"]."</td>
                                <td>".$Getraenk["Menge"]."</td>
                                <td>".$Getraenk["Preis"]."</td>
                            </tr>";
                        }
                        echo "</table>";
                    ?>
                </div>
                <div class="item3">
                    <?php
                        $vorname = $_POST['vorname'];
                        $nachname = $_POST['nachname'];
                        $fachrichtung = $_POST['fachrichtung'];
                        $wunschgetraenk = $_POST['wunschgetraenk'];

                        $db = new mysqli('172.17.0.3', 'root', 'gibbiX12345', 'lieblingsgetraenke');
                        $sql = "INSERT INTO person (Vorname, Nachname, Fachrichtung, Wunschgetraenk) VALUES ('$vorname','$nachname','$fachrichtung','$wunschgetraenk')";
                        $ergebnis = $db->query($sql);

                        $sqlselect = "SELECT Vorname, Nachname, Fachrichtung, Wunschgetraenk FROM person";
                        $result = $db->query($sqlselect);

                        echo "
                        <div class='item1'>
                            <b>Vielen Dank für deine Bestellung</b>
                        </div>
                        <br>";
                        echo "<table>
                        <tr>
                            <th>Vorname</th>
                            <th>Nachname</th>
                            <th>Fachrichtung</th>
                            <th>Wunschgetraenk</th>
                        </tr>";
                        while($row = $result->fetch_assoc())
                        {
                            echo "
                            <tr>
                                <td>".$row["Vorname"]."</td>
                                <td>".$row["Nachname"]."</td>
                                <td>".$row["Fachrichtung"]."</td>
                                <td>".$row["Wunschgetraenk"]."</td>
                            </tr>";
                        }
                        echo "</table>";
                        $db->close();
                    ?>
                </div>
                <div class="item4">
                    <img class="elefant" src="https://www.kindpng.com/picc/m/740-7401065_elephant-clipart-black-and-white-elephant-2d-hd.png" alt="Leider kann der Elefant nicht anezeigt werden.">
                    <br>
                    Dieser Elefant frisst den Cursor!
                </div>
            </div>
            <div class="grid-container">
                <div class="item5">
                    &copy; Tibor Blasko
                </div>
                <div class="item6">
                <strong>
                    Tibor Blasko
                </strong>
                </div>
            </div>
    </body>
</html>
