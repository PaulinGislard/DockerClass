FROM alpine
RUN apk update \
&& apk add apache2 \
&& apk add php7 php7-fpm php7-opcache php7-apache2\
&& rm -rf /var/cache/apk/*

CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
EXPOSE 8080:80
RUN httpd
