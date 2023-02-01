#!/bin/sh
echo 'Initializing docker web container'
echo pwd
composer install --working-dir=/var/www/html
chmod -R 777 /var/www/html/storage
chmod -R 777 /var/www/html/bootstrap/cache
chmod -R 777 /var/www/html/vendor
php /var/www/html/artisan migrate --force
php /var/www/html/artisan storage:link
echo 'Laravel server is running...'
exec /usr/sbin/apachectl -DFOREGROUND