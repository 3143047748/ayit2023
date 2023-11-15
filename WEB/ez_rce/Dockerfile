FROM ctftraining/base_image_nginx_mysql_php_56
RUN rm -rf /var/www/html/*
COPY src /var/www/html
COPY /flag /
RUN mv /var/www/html/flag.sh / \	
    && chmod +x /flag.sh
RUN chown -R www-data:www-data /var/www/html  \
	&&chown -R www-data:www-data /flag
