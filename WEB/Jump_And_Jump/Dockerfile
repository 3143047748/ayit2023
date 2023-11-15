FROM ctftraining/base_image_nginx_php_56

# Copy your application code
COPY src /var/www/html/
COPY src/flag.php /var/www/html/

# Move the flag.sh script and set permissions
RUN mv /var/www/html/flag.sh / \
    && chmod +x /flag.sh \
    && chmod +x /var/www/html/flag.php
