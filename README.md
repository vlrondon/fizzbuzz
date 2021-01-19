# FizzBuzz

## Description

FizzBuzz is a child game use to probe the skill of the developer to find the better solution for a simple problem.

## Setup

Once the repo is cloned, run this on the command line to install Composer.

```bash
curl -s http://getcomposer.org/installer | php
```

Or [download composer.phar](http://getcomposer.org/composer.phar) in the project root.

Next, run this to install dependencies.

```bash
php composer.phar install
```

Then to run PHPUnit, simply execute this in the root of the project.

```bash
"./vendor/bin/phpunit.bat"
```

Then to run Behat, simply execute this in the root of the project.

```bash
"vendor\bin\behat"
```

To show the project result open a command line and run this on the project root.

```bash
php -S localhost:8000
```

Then open a browser and visit:

http://localhost:8000