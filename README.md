# simple-cache
PHP classes for caching singletons

[![Latest Stable Version](https://poser.pugx.org/phyrexia/cache/v/stable)](https://packagist.org/packages/phyrexia/cache)
[![License](https://poser.pugx.org/phyrexia/cache/license)](https://packagist.org/packages/phyrexia/cache)

## Requirements

- PHP >= 5.3

## Suggestions

- PHP extension memcached

## Installation

Install directly via [Composer](https://getcomposer.org):
```bash
$ composer require phyrexia/cache
```

## Basic Usage

### Memcached

```php
<?php
require 'vendor/autoload.php';

use Phyrexia\Cache\Memcached;

//First call: generate instance (next calls won't need parameters, Singleton <3)
$mc = Memcached::getInstance(HOST, PORT);

//Do stuff
$r = Memcached::getInstance()->set('key', 'value');
```
