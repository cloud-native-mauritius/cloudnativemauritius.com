#!/bin/bash

php artisan serve --host=0.0.0.0 --port=8000 &

npm run dev -- --host=0.0.0.0 &

wait -n

exit $?
