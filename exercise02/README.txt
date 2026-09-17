Exercise 2 includes a custom php.ini file.

Required values:
upload_max_filesize = 30M
post_max_size = 25M

If you are using Docker, mount php.ini inside:
 /usr/local/etc/php/conf.d/custom.ini

After changing PHP configuration, restart the container.
