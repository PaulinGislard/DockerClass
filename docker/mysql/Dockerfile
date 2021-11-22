FROM alpine:latest

RUN apk update && \
	apk add mariadb mariadb-client mariadb-server-utils && \
	mkdir /scripts && \
	rm -rf /var/cache/apk/*

COPY ./db_file/startup.sh /scripts/startup.sh
RUN chmod +x /scripts/startup.sh
RUN sed -i -e"s/^bind-address\s*=\s*127.0.0.1/bind-address = 0.0.0.0/" /etc/my.cnf
VOLUME [ "/var/lib/mysql" ]
ENTRYPOINT ["/scripts/startup.sh"]