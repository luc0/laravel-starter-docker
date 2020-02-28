#!/bin/sh
# Script to create testing mariadb database

echo "\n-- CREATING TESTING DATABASE --\n"

mysql -v -uroot --password=""<<-EOSQL
    CREATE DATABASE ${MYSQL_DATABASE}_testing;
    GRANT ALL PRIVILEGES ON *.* TO $MYSQL_USER IDENTIFIED BY "$MYSQL_PASSWORD";
    FLUSH PRIVILEGES;
EOSQL
