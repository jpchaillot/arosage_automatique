sudo apt-get update
sudo apt-get upgrade -y

git clone https://github.com/jpchaillot/arosage_automatique.git /var/www/html

sudo apt install apache2 php php-mbstring   && sudo chown -R pi:www-data /var/www/html/ &&  sudo chmod -R 777 /var/www/html/


sudo apt-get install git-core -y
#drogon.net/wiringPi

sudo apt-get install wiringpi
