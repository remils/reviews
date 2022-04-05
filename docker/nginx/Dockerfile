FROM nginx:1.21

ENV TZ=Europe/Moscow
ENV UID=1000

RUN usermod -u ${UID? invalid argument} www-data
RUN groupmod -g ${UID? invalid argument} www-data

COPY ./default.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/html

EXPOSE 80 6001