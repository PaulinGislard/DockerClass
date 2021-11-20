FROM alpine
RUN apk update \
&& apk add apache2 \
&& rm -rf /var/cache/apk/*
COPY apache.conf /usr/local/apache2/conf/apache.conf
RUN echo "Include /usr/local/apache2/conf/dapache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
EXPOSE 8080:80
RUN httpd
