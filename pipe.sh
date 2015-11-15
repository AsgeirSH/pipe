sudo apt-get -y install apache2 libapache2-mod-auth-mysql
sudo apt-get -y install php5 php5-mcrypt php5-mysql php5-curl

sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password vagrant'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password vagrant'
sudo apt-get -y install mysql-server

## Change SERVER_NAME?
