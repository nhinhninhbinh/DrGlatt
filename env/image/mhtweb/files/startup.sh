#!/bin/bash
exec /usr/sbin/init
systemctl restart httpd.service
## Apacheの起動
#/usr/sbin/httpd -D FOREGROUND
#
##PHPUNIT
#wget -P /var/www/html/app/Vendor https://phar.phpunit.de/phpunit-5.7.27.phar -O phpunit.phar
#chmod +x phpunit.phar

