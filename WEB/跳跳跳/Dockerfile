FROM ctftraining/base_image_nginx_mysql_php_56
COPY src /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN mv /var/www/html/flag.sh / \	
    && chmod +x /flag.sh