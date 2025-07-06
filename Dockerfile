FROM php:8.2-apache

# Enable mod_rewrite (optional)
RUN a2enmod rewrite

# Install common PHP extensions (optional)
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

# Copy all your app files to the web root
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
