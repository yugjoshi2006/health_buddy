FROM php:8.0.30-apache

RUN apt-get update && apt-get upgrade -y

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

COPY ./app /var/www/html

COPY ./app/my-site.conf /etc/apache2/sites-available/my-site.conf

RUN echo 'SetEnv MYSQL_DB_CONNECTION ${MYSQL_DB_CONNECTION}' >> /etc/apache2/apache2.conf && \
    echo 'SetEnv MYSQL_DB_NAME ${MYSQL_DB_NAME}' >> /etc/apache2/apache2.conf && \
    echo 'SetEnv MYSQL_USER ${MYSQL_USER}' >> /etc/apache2/apache2.conf && \
    echo 'SetEnv MYSQL_PASSWORD ${MYSQL_PASSWORD}' >> /etc/apache2/apache2.conf

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    a2enmod rewrite headers && \
    a2dissite 000-default && \
    a2ensite my-site

EXPOSE 80
