FROM registry.suse.com/bci/php:8

WORKDIR /app

COPY . .

RUN zypper -n in php8-intl php8-tokenizer php8-fileinfo php8-dom php8-xmlreader php8-xmlwriter php8-pdo php8-sqlite
RUN zypper -n in nodejs npm

RUN composer install

RUN npm install

COPY .env.example .env

RUN php artisan key:generate
RUN php artisan storage:link

RUN sed -i 's/;extension=pdo_sqlite/extension=pdo_sqlite/' /etc/php8/cli/php.ini
RUN sed -i 's/;extension=sqlite3/extension=sqlite3/' /etc/php8/cli/php.ini
RUN touch ./database/database.sqlite

RUN cat /etc/php8/cli/php.ini | grep sqlite

RUN php artisan migrate --seed

EXPOSE 5173 8000

CMD ./start_script.sh

