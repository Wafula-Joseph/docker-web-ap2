FROM php

COPY . /var/www/html
EXPOSE 3000
CMD [ "php", "-S", "0.0.0.0:3000" ]
