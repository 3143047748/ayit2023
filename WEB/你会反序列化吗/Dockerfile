FROM ctftraining/base_image_nginx_mysql_php_56 


COPY src /var/www/html/
COPY ./flag /

RUN mv /var/www/html/flag.sh / \
    && chmod +x /flag.sh
