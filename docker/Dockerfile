#Imagen php versión 8.1
FROM php:8.1

# Copiar los archivos package.json composer.json y composer-lock.json a /var/www/
COPY composer*.json /var/www/

# Ubicarnos en /var/www/
WORKDIR /var/www 

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    git \
    curl

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo_mysql zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Instalamos composer y dependencias
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN HASH=`curl -sS https://composer.github.io/installer.sig`
#RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-ansi --no-dev --no-interaction --no-progress --optimize-autoloader --no-scripts
#Copiar todos los archivos a la carpeta /var/www/
COPY . /var/www/

#Exponer puerto 9000
EXPOSE 9000

# Correr comando php-fpm para ejecutar PHP
CMD [""php-fpm""]

