## Server Site Automated Deployment Script
rm -rf NotQuiteReddit
git clone https://github.com/caucajun/NotQuiteReddit.git
cp -af NotQuiteReddit/* /var/www/html/shittyReddit/forum
chmod -R o+w /var/www/html/shittyReddit/forum/storage
exit
