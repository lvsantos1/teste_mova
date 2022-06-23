################### RUNNER ###################
FROM nginx:stable as runner

# PUT PHP PACKAGES
RUN curl https://packages.sury.org/php/apt.gpg --output /etc/apt/trusted.gpg.d/php.gpg
RUN echo "deb https://packages.sury.org/php/ bullseye main" | tee /etc/apt/sources.list.d/php.list

# UPDATE PACKAGES
RUN apt update -y && apt upgrade -y

# INSTAL PHP AND DEPENDENCIES
RUN apt -y install php8.1-fpm

# COPY APP FILES
COPY ./App /usr/share/nginx/www

# COPY CONFIGs FILEs
COPY nginx.conf /etc/nginx/nginx.conf
COPY php-fpm-www.conf /etc/php/8.1/fpm/pool.d/www.conf

# CREATE USER
RUN useradd -p ADn01dNSADS121r12r1dSAD -s /bin/bash reveler
RUN usermod -G reveler reveler

# CREATE LOGS DIR
RUN mkdir /var/log/app_logs
RUN cd /var/log/app_logs && chown -R reveler:reveler . && chmod -R 777 .

#CREATE START.SH FILE
RUN echo '#!/bin/sh\n\nsh /etc/init.d/php8.1-fpm start && service nginx start && tail -f /dev/null;' > start.sh

#START WOKING
WORKDIR /
ENTRYPOINT ["sh", "start.sh"]⏎