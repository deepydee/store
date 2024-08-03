FROM vitodelgado/php-base:latest

RUN apk add --no-cache \
        nginx \
        supervisor

COPY docker/images/php/configs/nginx.conf /etc/nginx/nginx.conf
COPY docker/images/php/configs/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY docker/images/php/configs/php.ini /usr/local/etc/php/conf.d/custom.ini
COPY docker/images/php/configs/supervisord.conf /etc/supervisord.conf
COPY docker/images/php/configs/workers.conf /etc/workers.conf

RUN chown -R webserver.webserver /var/www/html && \
    chown -R webserver.webserver /run && \
    chown -R webserver.webserver /var/lib/nginx && \
    chown -R webserver.webserver /var/log/nginx

COPY --chown=webserver:webserver docker/images/php/configs/start.sh /run/start.sh
RUN chmod +x /run/start.sh

COPY --chown=webserver:webserver ./app .

USER webserver

EXPOSE 80

CMD ["/run/start.sh"]

# HEALTHCHECK --timeout=10s --start-period=5s CMD curl --silent --fail http://127.0.0.1:80/fpm-ping
