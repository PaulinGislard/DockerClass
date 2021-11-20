FROM alpine
RUN apk update \
&& apk add nano \
&& apk add mysql mysql-client \
&& rm -rf /var/cache/apk/*
COPY startup.sh /startup.sh
COPY /db_file/my.cnf /etc/mysql/my.cnf
CMD ["/startup.sh"]