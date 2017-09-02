# Amadeus It Group PHP Developer Technical Task

## Overview

Hello %username%. Here would be your start point in big amadeus company. This task is like a game and I hope it would
be interesting. In any case, imagine a zoo. It contains animals. Animals like birds, fish, etc. These animals have 
their abilities, for instance, birds can fly, fish can swim, monkeys can walk. Every animal has to eat, that's why 
every animal has such ability. There are several issues and we hope you'd solve them for us.
   
## Instructions

* Create a branch named by your name.surname
* Look at our code, believe me, it's kinda shitty
* Make this code as good as you can
  * Make as many commits as you want
  * Show us you power
* Push into a repository
* Create a Pull Request
* Wait until our CI commit into your branch a new file with new instructions (in progress, hasn't been done yet)

## Nice to have in result code

* php 7
* Unit tests
* docker environment

## Software requirements:

* latest docker installed
* latest docker-compose installed

## Installation guide (tested on unix):
* Run ***cd path_of_project/docker*** from command line interface
* Run ***cp .env.dist .env*** from command line interface to populate docker environment variables
* **[optional]** Modify **./docker/.env** file to change environment variables. Tips and recommendations are:
  * ENVIRONMENT property values are *'prod'* and *'dev'*, which allows to load development or production configuration 
  correspondingly. Set value to *'dev'* to view errors on the app webpage
  * change DOCKER_USER variable to set user name inside docker container
  * Check ports for nginx and php (PHP_PORT and NGINX_PORT) to avoid port conflicts
* To build docker containers first time run ***docker-compose up --build -d*** from command line interface. To start
docker containers without rebuilding just omit **--build** parameter
* To log into docker container run ***docker-compose exec php bin/bash*** from command line interface
* Application is available at [localhost:8488](localhost:8488), where 8488 is an nginx port, set in .env file.
