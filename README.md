# Drupal Ray Debugger

A simple Drupal module for integrating the [Ray Debugging tool](https://myray.app/) for use within a Drupal project.
Ray allows developers to debug code in PHP, Twig, Javascript, and [integrates](https://spatie.be/docs/ray/v1/installation-in-your-project/introduction)
with numerous PHP/JS frameworks and content management systems.


## Install

This module requires installation with [composer](https://getcomposer.org/).

```
composer install drupal/ray_debugger
```

:bulb: It's common to include a development module like this using `--require-dev` in composer, or adding the module
to Drupal's `$settings['config_exclude_modules']` setting so the module won't be installed on other environments. Keep
in mind that leftover debug statements in the codebase might result in a fatal error without the module and dependencies
installed

## Requirements

- drupal/core 8.8 or greater
- PHP 7.3 or greater

## Modules

### Ray Debugger

The base module for common libraries.

### Ray Debugger Twig

A module that allows you to debug Twig variables using Ray in theme/module Twig files.

### Ray Debugger Javascript

A module that allows you to debug Javascript variables using Ray in theme/module JS files.

## Setting up Ray

Setup requires adding a [ray.php](https://spatie.be/docs/ray/v1/configuration/framework-agnostic-php) config file to your project root.

### Lando
TODO

### DDEV
TODO
