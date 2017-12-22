FROM php:7.0-apache
MAINTAINER jose nazario <jose@monkey.org>
LABEL version="1.0" description="xss-labs Docker image"

RUN apt-get -qq update

COPY . /var/www/html
