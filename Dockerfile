FROM php:apache

COPY . /var/www/html

COPY apache.conf /etc/apache2/sites-available/000-default.conf


EXPOSE 80

CMD ["apache2-foreground"]
