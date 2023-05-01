## Mini-Projekt M169 Dockerfile</br>

Wir legen ein Dockerfile in unserem Verzeichnis an und füllen folgenden Inhalt ein:</br>

\# Tibor Miniprojekt M169</br>
FROM php:8-apache</br>
COPY index.php /var/www/html</br>
COPY tibor-miniprojekt.php /var/www/html</br>
LABEL maintainer "tibor.blasko@edu.gbssg.ch"</br>
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli</br>
RUN apt-get update && apt-get upgrade -y</br>
CMD ["/bin/sh"]</br>

In diesem Fall verwenden wir Apache und nicht NGINX, da die Erfahrung mit Apache grösser ist.</br>
Die Datei index.php und tibor-miniprojekt.php soll in das Verzeichnis /var/www/html des Containers kopiert werden.</br>
Um auf eine Datenbank zugreifen zu können, soll die php-mysqli Extension installiert und aktiviert werden.</br>
Anschliessend wird noch ein apt update und upgrade ausgeführt.</br>

![image](https://user-images.githubusercontent.com/98404509/225875996-3266d3c4-edcf-4a4e-92f7-1369346782cd.png)

Nun legen wir noch die PHP Dateien an.</br>
Deren Inhalt kann in diesem Repository inspiziert werden.</br>

![image](https://user-images.githubusercontent.com/98404509/225876971-9c919394-53ce-4fb1-9db2-394dc9106ea0.png)

Jetzt brauchen wir zuerst noch einen MariaDB Container zu erstellen und eine Datenbank zu importieren.</br>
Das SQL-File befindet sich ebenfalls im Repository.</br>
Zusätzlich erstellen wir ein Volume.</br>

![image](https://user-images.githubusercontent.com/98404509/225881595-987a5a13-5bdb-4446-afe9-ef21464022fb.png)

Nach der Datenbank, können wir endlich das Image erstellen.

![image](https://user-images.githubusercontent.com/98404509/225882623-38ae56ff-4054-4a22-8f93-77e974f3c1d0.png)

Aus diesem Image heraus erstellen wir nun unseren PHP-Container.

![image](https://user-images.githubusercontent.com/98404509/225882922-4b4a6905-e282-45f0-bc54-df1cb16956ac.png)

Siehe da! Wir können auf unsere Website über den Port 8080 zugreifen.

![image](https://user-images.githubusercontent.com/98404509/225883360-9db81d9d-3afc-4801-be27-6bb7b3b4781d.png)

![image](https://user-images.githubusercontent.com/98404509/225886212-74bb66f5-ee5e-4e3d-87d2-b37702b0b0dc.png)
