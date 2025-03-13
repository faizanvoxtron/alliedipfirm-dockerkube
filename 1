FROM php:8.3-apache

# Install dependencies and common PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        gd \
        mbstring \
        zip \
        exif \
        xml \
        opcache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory in the container
WORKDIR /var/www/html

# Copy website files and additional directories to the container
COPY . /var/www/html
COPY ./nitropack-sdk /var/www/nitropack-sdk

RUN echo "error_reporting = E_ALL & ~E_NOTICE & ~E_WARNING" >> /usr/local/etc/php/php.ini \
    && echo "display_errors = Off" >> /usr/local/etc/php/php.ini \
    && echo "log_errors = On" >> /usr/local/etc/php/php.ini \
    && echo "error_log = /var/log/php_errors.log" >> /usr/local/etc/php/php.ini

# Set proper permissions for Apache and additional files
RUN chown -R www-data:www-data /var/www/html /var/www/nitropack-sdk

# Expose port 80 for Apache
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]

