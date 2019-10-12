FROM debian:buster-slim

ENV TZ=Asia/Tokyo \
  PHP_INI_SCAN_DIR=:/etc/php.extra.d \
  APACHE_ENVVARS=/etc/apache2/envvars \
  DEBIAN_FRONTEND=noninteractive

RUN set -eux; \
  mkdir -m 777 /var/www; \
  chown www-data:www-data /var/www; \
  mkdir -m 777 /etc/php.extra.d; \
  apt-get update; \
  apt-get upgrade -y; \
  apt-get install -y \
    apache2 \
    php7.3 \
    php7.3-dev \
    php7.3-mysql \
    php7.3-mbstring \
    php7.3-xml \
    php7.3-gd \
    php7.3-curl \
    php7.3-sqlite3 \
    php7.3-json \
    php7.3-zip \
    php-gettext \
    php-pear \
    php-xdebug \
    php7.3-dev \
    gdb \
    php7.3-mailparse; \
  curl -s https://packagecloud.io/install/repositories/phalcon/stable/script.deb.sh | bash; \
  apt-get update; \
  apt-get install -y php7.3-phalcon; \
  apt-get clean; \
  rm -rf /var/lib/apt/lists/*

EXPOSE 80

VOLUME \
  /etc/apache2/sites-enabled \
  /etc/php.extra.d \
  /var/www

CMD ["apachectl", "-D", "FOREGROUND"]
