FROM alpine
RUN apk update \
&& apk add nano \
&& apk add mysql mysql-client \
&& rm -rf /var/cache/apk/*
COPY /db_file/startup.sh /startup.sh
COPY /db_file/my.cnf /etc/mysql/my.cnf
CMD ["/startup.sh"]
FROM alpine:latest

RUN apk update && \
	apk add mysql mysql-client && \
	addgroup mysql mysql && \
	mkdir /scripts && \
	rm -rf /var/cache/apk/*

COPY ./startup.sh /scripts/startup.sh
RUN chmod +x /scripts/startup.sh

ENTRYPOINT ["/scripts/startup.sh"]