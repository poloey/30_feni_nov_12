# [:house: Feni Batch Home Page](http://poloey.github.io/feni)
# Class 30

## basic folder structure for php package e.g: today
~~~
core/
core/boot.php
core/Query.php
core/Db.php
views/
views/about.view.php
views/index.view.php
controllers/
controllers/about.controller.php
controllers/index.controller.php 
models/
about.php
index.php
config.php
~~~

## Things to know about json(javaScript object notation).
* json file extension is .json
* in json key and value encapsulated with `"` quote not `'` quote.
* you can't put trailing comma in json

## how to install composer dependency manager in windows
Go to https://getcomposer.org/ website. Navigate to getting started page. There you will find ` Composer-Setup.exe` under windows installation. After downloading composer just install composer. While install composer check the right php path.     
Once you install composer you can check on your terminal or cmd by typing `composer`

### how to install package in composer
* just go to https://packagist.org/. 
* Choose a package you want to install and copy package name with composer command which can be found near the download icon
* in terminal paste that command. Voilá thats all. It will install package and added link to `vendor/autoload.php` file
* to use all package installed by composer I will require only `vendor/autoload.php` file

