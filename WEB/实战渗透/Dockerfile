FROM php:8.0.1-apache
COPY src /var/www/html
COPY /flag /
RUN chown -R www-data:www-data /var/www/html  \
	&&chown -R www-data:www-data /flag
