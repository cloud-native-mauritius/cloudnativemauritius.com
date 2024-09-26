#!/bin/bash

if [ -z "$URL" ]; then
	export URL="0.0.0.0"
fi 

npm run build

php artisan serve --host=$URL --port=8000 &

wait -n

exit $?
