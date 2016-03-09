FROM richarvey/nginx-php-fpm
ENV TIMEZONE Australia/Sydney

ADD ["dom.php", "index.php", "/usr/share/nginx/html/"]
