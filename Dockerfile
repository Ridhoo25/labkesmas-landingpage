FROM php:8.2-fpm-alpine

RUN apk add --no-cache nginx supervisor

RUN mkdir -p /var/www/html /run/nginx /var/cache/nginx

COPY nginx.conf /etc/nginx/http.d/default.conf
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
