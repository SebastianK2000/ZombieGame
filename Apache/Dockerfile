FROM php:8.0-apache

COPY ZombieGame/Apache/apache.conf /app/public/

RUN a2enmod rewrite

COPY index.php /ZombieGame/index.php/

EXPOSE 80

CMD ["apache2-foreground"]