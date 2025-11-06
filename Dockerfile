FROM debian:trixie-slim
RUN apt update -y && apt install php-common libapache2-mod-php php-cli php-mbstring -y
RUN ln -sf /dev/stdout /var/log/apache2/access.log
RUN ln -sf /dev/stderr /var/log/apache2/error.log
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"]