FSTool
======

PHP 5/6 reimplementation of the FS Tool

Requires:

 * php --with-ldap
 * OpenSSL

Project Install:

 * composer install --dev


MYSQL:

 - Creating a generic users and database

```sql
    CREATE DATABASE fstool;
    CREATE USER 'fstool'@'localhost' IDENTIFIED BY 'fstool';
    GRANT ALL PRIVILEGES ON fstool.* TO 'fstool'@'localhost';
    FLUSH PRIVILEGES;
```