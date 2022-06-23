################### RUNNER ###################
FROM nginx:stable as runner

# Instala repositorios do PHP
RUN curl https://packages.sury.org/php/apt.gpg --output /etc/apt/trusted.gpg.d/php.gpg
RUN echo "deb https://packages.sury.org/php/ bullseye main" | tee /etc/apt/sources.list.d/php.list

# Atualização de pacotes do sistema
RUN apt update -y && apt upgrade -y

# Instala o PHP
RUN apt -y install php8.1-fpm

# Copia os arquivos do aplicativo
COPY ./App /usr/share/nginx/www

# Copia os arquivos de configuração
COPY nginx.conf /etc/nginx/nginx.conf
COPY php-fpm-www.conf /etc/php/8.1/fpm/pool.d/www.conf

# Cria o usuario e grupo do app
RUN useradd -p ADn01dNSADS121r12r1dSAD -s /bin/bash reveler
RUN usermod -G reveler reveler

# Cria diretório de logs
RUN mkdir /var/log/app_logs
RUN cd /var/log/app_logs && chown -R reveler:reveler . && chmod -R 777 .

# Cria o script sh de inicialização do container
RUN echo '#!/bin/sh\n\nsh /etc/init.d/php8.1-fpm start && service nginx start && tail -f /dev/null;' > start.sh

# Inicia o container
WORKDIR /
ENTRYPOINT ["sh", "start.sh"]⏎