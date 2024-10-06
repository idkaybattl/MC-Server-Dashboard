Made to work on Ubuntu Server with Apache, but should work on other Linux distros too.
Everything for this is supposed to be in /srv but you could technically put it everywhere you want.

Install Apache2, MySQL and PHP (https://www.digitalocean.com/community/tutorials/how-to-install-lamp-stack-on-ubuntu#changing-apache-s-directory-index-optional)
make the Root Directory "/srv/MC-Server-Dashboard/src/website"
then clone this github repository in /srv and change the ownership of the rep to your own user using the "chown" commmand