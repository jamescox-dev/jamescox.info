#!/bin/bash

echo Removing previous build.
rm -R public/*

echo Generating website.
HUGO_ENV=production hugo --baseUrl http://jamescox.info/

echo Sending website to webserver.
rsync -rv --del public/ james@webserver:/var/www/html/
