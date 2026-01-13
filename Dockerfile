FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libpq-dev \
    default-mysql-client \
    nodejs \
    npm \
    && rm -rf /var/lib/apt/lists/*

# PHP extensions required by Laravel + Livewire
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    pcntl \
    bcmath \
    intl \
    gd \
    xml

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy application files
COPY . .

# Install PHP dependencies
RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader

# Install frontend dependencies & build assets (Tailwind + Vite)
RUN npm install && npm run build

# Permissions for Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]
