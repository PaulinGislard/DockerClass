FROM alpine
RUN apk update \
&& apk add nano \
&& apk add apache2 \
&& rm -rf /var/cache/apk/*
COPY apache.conf /usr/local/apache2/conf/demo.apache.conf
RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
RUN httpd
