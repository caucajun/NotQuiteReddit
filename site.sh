## Server Site Automated Deployment Script
rm -rf shittyReddit
git clone https://github.com/caucajun/shittyReddit.git
cp -af shittyReddit/* /var/www/html/shittyReddit/forum
exit
