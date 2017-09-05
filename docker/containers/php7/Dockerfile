FROM php:7.1-fpm

# installing additional packages
RUN apt-get update && apt-get -y --no-install-recommends install software-properties-common git vim \
    zip unzip php-pclzip mc iputils-ping

# performing clean-up
RUN apt-get clean; apt-get autoremove -y;
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# setting up composer
RUN mkdir -p /usr/local/bin
RUN curl -LsS https://getcomposer.org/download/1.5.1/composer.phar -o /usr/local/bin/composer
RUN chmod a+x /usr/local/bin/composer
RUN composer self-update --no-interaction


# Install Xdebug
#Taken from https://hub.docker.com/r/connectmedica/php7.1-xdebug/~/dockerfile/
RUN curl -fsSL 'https://xdebug.org/files/xdebug-2.5.1.tgz' -o xdebug.tar.gz \
    && mkdir -p xdebug \
    && tar -xf xdebug.tar.gz -C xdebug --strip-components=1 \
    && rm xdebug.tar.gz \
    && ( \
    cd xdebug \
    && phpize \
    && ./configure --enable-xdebug \
    && make -j$(nproc) \
    && make install \
    ) \
    && rm -r xdebug \
    && docker-php-ext-enable xdebug

# add user
ARG DOCKER_USER
RUN useradd -ms /bin/bash $DOCKER_USER
WORKDIR "/www"
RUN chown $DOCKER_USER:$DOCKER_USER -R $(pwd)

#use $DOCKER_USER when logging into container
USER $DOCKER_USER
