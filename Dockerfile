FROM richarvey/nginx-php-fpm:3.1.6

WORKDIR /var/www/html

COPY . .

COPY conf/nginx/nginx-site.conf /etc/nginx/sites-enabled/default.conf

RUN composer install --no-dev --optimize-autoloader --no-scripts

RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80

CMD ["/start.sh"]
