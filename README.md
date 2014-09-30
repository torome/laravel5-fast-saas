Laravel 5 Fast SaaS Starting Point
----------------------------------

This README outlines the details of collaborating on this Laravel5 application.

## Prerequisite

### Install Composer

See https://getcomposer.org/ for more information

`
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer

`


### Install NPM

See https://github.com/npm/npm OR https://www.npmjs.org/ for more information

### Install Bower

See http://bower.io/ for more information

`
$ npm install -g bower
`

### Install bower-installer helper

See https://www.npmjs.org/package/bower-installer for more information

`
$ npm install -g bower-installer
`


## Installation

* `git clone git@github.com:kharysharpe/laravel5-fast-saas.git projectname` this repository
* `cd projectname`
* `rm -rf .git` remove git (add your own repository (`$ git init`))
* `composer install`
* `bower install`
* `bower-installer`
* `php artisan key:generate`
* `php artisan app::name PROJECTNAME`
* `php artisan migrate`
* Start coding (:


## Running Application

* `php artisan serve`
* Visit your app at http://localhost:8000

## Running Tests

* `phpunit`


## Deploying Application
* Push to master
* http://your-app.com/deploy