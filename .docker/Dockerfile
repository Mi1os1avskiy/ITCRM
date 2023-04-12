#FROM node:19 AS builder

#WORKDIR /app

#COPY . .

#RUN npm ci
#RUN npm run build

FROM nanoninja/php-fpm:7.4.10 AS runner

LABEL maintainer="a.remniov@brainq.com"

WORKDIR /var/www/html

COPY . .
#RUN rm -rf frontend
#COPY --from=builder /app/public ./public

## Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

EXPOSE 9000

#CMD [ "php", "public/index.php" ]
