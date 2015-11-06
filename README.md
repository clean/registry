# Clean\Registry

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/clean/registry/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/clean/registry/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/clean/registry/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/clean/registry/?branch=master)
[![Build Status](https://travis-ci.org/clean/registry.svg?branch=master)](https://travis-ci.org/clean/registry)

Simple implementation of registry pattern

## Installation

via [Composer](https://packagist.org/packages/clean/registry):

```json
"require": {
  "clean/registry": "*"
}
```

## Example of Usage

```php
$registry = new Registry()

$registry->set('var1', 1);

$var1 = $registry->get('var1');

if ($registry->has('var1')) {
    ...
}
```
