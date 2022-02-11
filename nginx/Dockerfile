FROM nginx:1.21

RUN mkdir -p /etc/nginx/conf/
RUN mkdir -p /etc/nginx/logs/ && touch /etc/nginx/logs/error.log
COPY nginx.conf /etc/nginx/nginx.conf
COPY proxy.conf /etc/nginx/proxy.conf
COPY fastcgi.conf /etc/nginx/fastcgi.conf
COPY mime.types /etc/nginx/conf/mime.types