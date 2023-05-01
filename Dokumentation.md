## Mini-Projekt M169 Dockerfile</br>

Wir legen ein Dockerfile in unserem Verzeichnis an und füllen folgenden Inhalt ein:</br>

```Dockerfile
# Tibor Miniprojekt M169
FROM php:8-apache
COPY index.php /var/www/html
COPY tibor-miniprojekt.php /var/www/html
LABEL maintainer "tibor.blasko@edu.gbssg.ch"
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
CMD ["/bin/sh"]
```

In diesem Fall verwenden wir Apache und nicht NGINX, da die Erfahrung mit Apache grösser ist.</br>
Die Datei index.php und tibor-miniprojekt.php soll in das Verzeichnis /var/www/html des Containers kopiert werden.</br>
Um auf eine Datenbank zugreifen zu können, soll die php-mysqli Extension installiert und aktiviert werden.</br>
Anschliessend wird noch ein apt update und upgrade ausgeführt.</br>

![image](https://user-images.githubusercontent.com/98404509/225875996-3266d3c4-edcf-4a4e-92f7-1369346782cd.png)

Nun legen wir noch die PHP Dateien an.</br>
Der Inhalt der Index PHP Seite ist wie folgt:</br>

```PHP
// Index PHP
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
            <!-- Zu Dokuzwecken hier nicht gelistet. Fuer mehr Details File "index.php" im Repository inspizieren. -->
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
                        echo "
                        <div class='item1'>
                            <b>Bitte gib deine Daten an und dein Wunschgetraenk aus der Liste links</b>
                        </div>
                        <br>";
                    ?>
                        <form action="tibor-miniprojekt.php" method="post" class="item3">  
                            <label for="vorname">Vorname:</label><br>
                            <input type="text" id="vorname" name="vorname"><br>
                            <label for="nachname">Nachname:</label><br>
                            <input type="text" id="nachname" name="nachname"><br>
                            <label for="fachrichtung">Fachrichtung:</label><br>
                            <input type="text" id="fachrichtung" name="fachrichtung"><br>
                            <label for="wunschgetraenk">Wunschgetraenk:</label><br>
                            <input type="text" id="wunschgetraenk" name="wunschgetraenk"><br><br><br>
                            <input class="speichern" type="submit" value="Speichern">
                        </form>
                </div>
                <div class="item4">
                    <img class="elefant" src="https://www.kindpng.com/picc/m/740-7401065_elephant-clipart-black-and-white-elephant-2d-hd.png">
                    <br>
                    Dieser Elefant frisst den Cursor!
                    <?php
                    ?>
                </div>
            </div>
            <div class="grid-container">
                <div class="item5">
                    &copy; Tibor Blasko
                </div>
                <div class="item6">
                <strong>Tibor Blasko</strong>
                </div>
            </div>
    </body>
</html>
```

![image](https://user-images.githubusercontent.com/98404509/225876971-9c919394-53ce-4fb1-9db2-394dc9106ea0.png)

Jetzt brauchen wir zuerst noch einen MariaDB Container zu erstellen und eine Datenbank zu importieren.</br>
Das SQL-File hat folgenden Inhalt.</br>

```SQL
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Feb 2022 um 13:58
-- Server-Version: 10.4.22-MariaDB
-- PHP-Version: 8.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `lieblingsgetraenke`
--

DROP DATABASE IF EXISTS lieblingsgetraenke;

CREATE DATABASE lieblingsgetraenke;

USE lieblingsgetraenke;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `person`
--

CREATE TABLE `person` (
  `Vorname` text NOT NULL,
  `Nachname` text NOT NULL,
  `Fachrichtung` text NOT NULL,
  `Wunschgetraenk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```

Zusätzlich erstellen wir ein Volume.</br>

![image](https://user-images.githubusercontent.com/98404509/225881595-987a5a13-5bdb-4446-afe9-ef21464022fb.png)

Nach der Datenbank, können wir endlich das Image erstellen.

![image](https://user-images.githubusercontent.com/98404509/225882623-38ae56ff-4054-4a22-8f93-77e974f3c1d0.png)

Aus diesem Image heraus erstellen wir nun unseren PHP-Container.

![image](https://user-images.githubusercontent.com/98404509/225882922-4b4a6905-e282-45f0-bc54-df1cb16956ac.png)

Siehe da! Wir können auf unsere Website über den Port 8080 zugreifen.

![image](https://user-images.githubusercontent.com/98404509/225883360-9db81d9d-3afc-4801-be27-6bb7b3b4781d.png)

![image](https://user-images.githubusercontent.com/98404509/225886212-74bb66f5-ee5e-4e3d-87d2-b37702b0b0dc.png)
