FROM alpine:latest

RUN apk update && \
	apk add mysql mysql-client && \
	addgroup mysql mysql && \
	mkdir /scripts && \
	rm -rf /var/cache/apk/*

COPY ./db_file/startup.sh /scripts/startup.sh
RUN chmod +x /scripts/startup.sh

ENTRYPOINT ["/scripts/startup.sh"]