# install wiringPI
cd /home/div/wiringPi
sudo ./build

# Testing wiringPI
gpio -v
gpio readall

# Install rcswitch-pi
cd /home/div/rcswitch-pi
make

# Test rcswitch-pi
sudo ./send 10000 1 1

# Install Apache webserver
apt-get install apache2 apache2-doc apache2-mpm-prefork apache2-utils apache2-suexec libexpat1 ssl-cert php5 php5-common php5-curl php5-cli php5-dev php5-gd php5-idn php5-imagick php5-mysql php5-xcache libapache2-mod-php5 a2enmod suexec rewrite ssl actions include

# Instal Mysql and phpMyAdmin (recommendation user:root pass:root).
apt-get install mysql-server phpmyadmin

# change webserver directory
nano /etc/apache2/sites-available/default
# DocumentRoot /var/www         ->    DocumentRoot /home/www
# <Directory /var/www/>         ->   <Directory /home/www

# change for mod_rewrite
# AllowOverride None            ->   AllowOverride FileInfo

# "ctrl + o" = save  
# "ctrl + x" = close
 
# Restart Apache2
/etc/init.d/apache2 restart
# [ Apache installation fertig ]

# awarded rights
cd home/www
sudo chown www-data:www-data /home/www
sudo chmod 775 /home/www
sudo usermod -a -G www-data pi

# rights for use rcswitch per website
sudo visudo
# add the following line
www-data ALL=NOPASSWD: /home/div/rcswitch-pi/send
# CTRL + O -> save
# CTRL + X -> close


# open crontab editor
sudo crontab -e

# add the following lines
*/5 * * * * php /home/www/cron/weather.php 
* * * * * php /home/www/cron/sunrise_sunset.php
* * * * * php /home/www/cron/gcal.php
* * * * * php /home/www/cron/caldav.php

# CTRL + O -> save
# CTRL + X -> close