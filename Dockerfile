# Tibor Miniprojekt M169
FROM php:8-apache
COPY index.php /var/www/html
COPY tibor-miniprojekt.php /var/www/html
LABEL maintainer "tibor.blasko@edu.gbssg.ch"
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y