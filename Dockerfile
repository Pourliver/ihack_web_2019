# Origin image
FROM debian:jessie

# Meta Information
MAINTAINER Pourliver "pourliver@gmail.com"

# PHP sources
RUN echo "deb  http://deb.debian.org/debian  stretch main" >> /etc/apt/sources.list
RUN echo "deb-src  http://deb.debian.org/debian  stretch main" >> /etc/apt/sources.list

# Update
RUN apt-get update

# Setup Server Environment
RUN apt-get install -y \
    apache2 \
    php \
    sqlite3 \
    libapache2-mod-php \
    php-sqlite3


# Add SSRF flag
RUN echo "flag_user:x:1337:1337:FLAG{Wait_This_Is_Not_An_Image!}:/nonexistent:/bin/false" >> /etc/passwd

# Enable mod_rewrite (for .htaccess filtering)
RUN a2enmod rewrite
RUN service apache2 restart

# Allow .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Remove default apache page
RUN rm /var/www/html/index.html

# Copy website
COPY chall/ /var/www/html/

COPY ihack.db /var/www/
COPY adminSecret.php /var/www/

# Fix vendor not being accessible
RUN chmod -R 755 /var/www/html/

# Expose apache's port
EXPOSE 80

# Entry point
ENTRYPOINT service apache2 start && /bin/bash
