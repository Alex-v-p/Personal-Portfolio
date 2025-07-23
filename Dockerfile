FROM php:8.3-fpm

# Install necessary dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libsqlite3-dev \
    zip \
    git \
    curl \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_sqlite

# Set working directory
WORKDIR /var/www

# Install Composer before copying (cached better)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy full Laravel app
COPY . /var/www

# Install dependencies
RUN composer install --no-interaction

# Set permissions
RUN chown -R www-data:www-data /var/www

# Expose PHP port
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
