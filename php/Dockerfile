# Simple Dockerfile used to run php7 and an apache server.
# Customized to install (and enable) mysqli.

FROM php:7-apache

RUN docker-php-ext-install -j$(nproc) mysqli