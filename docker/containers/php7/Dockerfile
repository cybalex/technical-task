FROM php:7.1.8-fpm

RUN apt-get update && apt-get -y --no-install-recommends install software-properties-common git vim \
    mc iputils-ping && apt-get clean; apt-get autoremove -y; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    /usr/share/doc/*

WORKDIR "/www"
