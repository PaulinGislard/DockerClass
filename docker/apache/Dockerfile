FROM alpine
RUN apk update \
&& apk add apache2 \
&& apk add --no-cache apache2 php7 php7-apache2 php7-openssl php7-xml php7-pdo php7-mcrypt php7-session php7-mysqli php7-zlib su-exec \
&& rm -f /var/www/localhost/htdocs/index.html \
&& rm -rf /var/cache/apk/*
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
EXPOSE 8080:80
RUN httpd
