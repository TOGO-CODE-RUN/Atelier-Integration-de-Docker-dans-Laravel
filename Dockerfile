FROM php:8.2-fpm-alpine

WORKDIR /test_app

RUN docker-php-ext-install mysqli pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /test_app

RUN chown -R www-data:www-data /test_app \
    && chmod -R 755 /test_app/storage /test_app/bootstrap/cache

COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["sh", "/usr/local/bin/entrypoint.sh"]

CMD [ "php-fpm" ]
