FROM php:8.0.1-apache

RUN rm -rf /var/www/html/*
COPY src /var/www/html
COPY /flag /
RUN chown -R www-data:www-data /var/www/html  \
	&&chown -R www-data:www-data /flag

