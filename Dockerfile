# Base image with PHP-FPM
FROM php:8.2-fpm

# Install system and PHP dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    python3 python3-pip \
    git unzip curl zip \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www

# Copy full Laravel project (including artisan)
COPY . .

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies (Laravel packages)
RUN composer install

# Make Laravel storage & cache writable
RUN chmod -R 775 storage bootstrap/cache

# Install Python packages for data analysis
RUN pip3 install --break-system-packages pandas numpy

# Expose port for artisan serve
EXPOSE 8000

# Start Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
