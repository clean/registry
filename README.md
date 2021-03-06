# Clean\Registry

[![Build Status](https://travis-ci.org/clean/registry.svg?branch=master)](https://travis-ci.org/clean/registry)
[![Code Climate](https://codeclimate.com/github/clean/registry/badges/gpa.svg)](https://codeclimate.com/github/clean/registry)
[![Test Coverage](https://codeclimate.com/github/clean/registry/badges/coverage.svg)](https://codeclimate.com/github/clean/registry/coverage)
[![Issue Count](https://codeclimate.com/github/clean/registry/badges/issue_count.svg)](https://codeclimate.com/github/clean/registry)

Basic implementation of registry pattern that implement a central storage for
objects often used throughout the application. 

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

or you can extend any class with `ReigistryTrait` to add registry methods to it

```php
class MyClass {
	use \Clean\Registry\RegistryTrait;
}
```
