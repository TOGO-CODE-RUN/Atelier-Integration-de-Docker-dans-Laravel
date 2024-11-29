#!/bin/sh

chown -R www-data:www-data /test_app/storage /test_app/bootstrap/cache
chmod -R 755 /test_app/storage /test_app/bootstrap/cache

exec php-fpm