FROM node:19 AS builder

WORKDIR /app

COPY . .

RUN npm ci
RUN npm run build

FROM nanoninja/php-fpm:7.4.10 AS runner

LABEL maintainer="a.remniov@brainq.com"

WORKDIR /var/www/html

RUN addgroup --gid 1000 ishosting && adduser --shell /bin/bash --uid 1000 --gid 1000 --disabled-password --gecos "" ishosting

COPY . .
RUN rm -rf frontend
COPY --from=builder /app/public ./public

## Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

RUN chown -R ishosting:ishosting .

USER 1000

RUN composer dump-autoload -o

EXPOSE 9000
