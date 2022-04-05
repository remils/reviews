FROM postgres:9.6

ENV TZ=Europe/Moscow

COPY ./initdb.d /docker-entrypoint-initdb.d

EXPOSE 5432