FROM php:fpm

LABEL maintainer="Makgsoewar <makgsoewar@gmail.com>"

RUN apt-get update && apt-get install -y \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
	&& docker-php-ext-install pdo pdo_mysql \
	&& docker-php-ext-install -j$(nproc) iconv \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) gd

#COPY php.ini /usr/local/etc/php/
#COPY index.html /usr/share/nginx/html

#php-common php-mbstring php-xmlrpc \
#php-soap php-gd php-xml php-intl \
#php-mysql php-cli php-mcrypt php-zip php-curl \

EXPOSE 9000