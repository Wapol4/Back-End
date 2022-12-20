PHP
- Install php
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php7.4-fpm
sudo php-fpm7.4 -v

- Install dependencies yang dibutuhkan (copy semua sampai -y)
sudo apt install php7.4-common php7.4-mysql php7.4-xml php7.4-xmlrpc php7.4-curl php7.4-gd php7.4-imagick php7.4-cli php7.4-dev php7.4-imap php7.4-mbstring php7.4-opcache php7.4-soap php7.4-zip php7.4-intl php7.4-bcmath -y

Composer
- Download composer
wget https://getcomposer.org/composer-stable.phar

- Install composer
chmod 755 composer-stable.phar
mv composer-stable.phar /usr/local/bin/composer

- Cek instalasi dengan command
Composer
