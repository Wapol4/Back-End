MySQL
- Install MySQL
sudo apt update 
sudo apt install mysql-server 
sudo mysql_secure_installation

- Buat user baru di MySql
mysql
CREATE USER 'nama_user'@'localhost' IDENTIFIED BY 'passwordmu';
GRANT ALL PRIVILEGES ON *.* TO 'nama_user'@'localhost' WITH GRANT OPTION;
Exit

Nginx
- Install nginx
sudo apt update
sudo apt install nginx
