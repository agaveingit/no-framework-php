# Base image PHP + Apache
FROM php:8.2-apache

# Install extension PHP yang dibutuhin
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy file project ke container
COPY ./apps /var/www/html/

# Enable Apache mod_rewrite (biar .htaccess jalan)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html/

# Ubah DocumentRoot Apache ke /var/www/html/public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Update konfigurasi Apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Composer (buat install dependency PHP)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
