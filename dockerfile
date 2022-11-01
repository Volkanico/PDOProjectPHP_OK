FROM php:8-apache
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y systemctl
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod autoindex 
RUN systemctl restart apache2
