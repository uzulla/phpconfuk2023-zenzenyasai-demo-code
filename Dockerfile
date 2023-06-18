FROM php:apache

RUN pecl install xdebug

COPY xdebug.ini /usr/local/etc/php/conf.d
