FROM alpine
RUN apk update \
&& apk add nano \
&& apk add php7-apache2 \
&& apk add apache2 \
&& apk add curl \
&& rm -rf /var/cache/apk/*
EXPOSE 8000:80
RUN httpd
