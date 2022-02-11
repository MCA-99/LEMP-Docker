
![Logo](https://tech.osteel.me/images/2020/03/04/docker-part-1-01.jpg)


# LEMP-Docker

This project seeks to easily create a web application capable of processing requests quickly and efficiently using Docker.

## What’s a LEMP stack?
LEMP refers to a collection of open-source software that is commonly used together to serve web applications. The term LEMP is an acronym that represents the configuration of a Linux operating system with an nginx (pronounced engine-x, hence the E in the acronym) web server, with site data stored in a MySQL database and dynamic content processed by PHP.


![Logo](https://ahex.co/wp-content/uploads/2017/11/Ahex-LEMP-1.png)
## Features

- Nginx 1.21
- Php 8-fpm (includes mysqli extension)
- Mysql 8.0.28
- PhpMyadmin 5.1.1-apache
- Includes error pages, DDBB connection, and small styling
- Includes easy start (Check if you have all the requirements to start the project. in case it does not install them automatically.)


## Deployment
### Before starting !
You have to configure the following files to get it to work properly:

- .env.example (rename and configure)
- /src/connection.php (configure)
### Start project
To start this project run

```bash
sh start.sh
```
To stop this project run

```bash
sh stop.sh
```
Go to localhost in your preferred browser.
## Documentation

- [Docker](https://docs.docker.com/)
- [Nginx](http://nginx.org/en/docs/)
- [Php](https://www.php.net/docs.php)
- [Mysql](https://dev.mysql.com/doc/)
- [PhpMyadmin](https://www.phpmyadmin.net/docs/)

## Badges

![Docker](https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white)
![Nginx](https://img.shields.io/badge/nginx-%23009639.svg?style=for-the-badge&logo=nginx&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

## Authors

- [@MCA-99](https://www.github.com/MCA-99)
## License

[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)

