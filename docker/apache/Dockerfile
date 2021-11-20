FROM alpine
RUN apk update \
&& apk add apache2 \
&& apk add php7 php7-fpm php7-opcache \
&& rm -rf /var/cache/apk/*
COPY apache.conf /etc/apache2/apache.conf
RUN echo "Include /etc/apache2//apache.conf" \
    >> /etc/apache2/httpd.conf
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
EXPOSE 8080:80
RUN httpd
