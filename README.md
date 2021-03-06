# Scalar-objects

[![Build Status](https://travis-ci.org/void-sector/scalar-objects.png?branch=master)](https://travis-ci.org/void-sector/scalar-objects)
[![Coverage Status](https://coveralls.io/repos/void-sector/scalar-objects/badge.svg?branch=master)](https://coveralls.io/r/void-sector/scalar-objects?branch=master)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/void-sector/scalar-objects/badges/quality-score.png?s=ea73f05a66608d98ea953c10d896da80b2b77aa2)](https://scrutinizer-ci.com/g/void-sector/scalar-objects/)


Supports method calls on primitive types in PHP. Allows you to use [Type Hinting](http://www.php.net/manual/en/language.oop5.typehinting.php) on the primitives in your OO project. Values are validated when constructed using there own validators. The project is [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md), [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) compatable.

**The project is work in progress.** I'm still trying to find a nice way to delegate the Operation calls following the [Open/Closed Principle](http://en.wikipedia.org/wiki/Open/closed_principle). Please take a look at the [Open Issues](https://github.com/void-sector/scalar-objects/issues?state=open) for more information.


## Examples

**String Example:**

```php
<?php

require('./vendor/autoload.php');

use Scalar\String;

$string = new String('We love Fruit!');

$string->replace('Fruit', 'Coding');
$string->toUpper();

echo $string->getValue() . PHP_EOL; // results in: WE LOVE CODING!
```

**Float Example:**

```php
<?php

require('./vendor/autoload.php');

use Scalar\Float;

$float = new Float(33.3333333);

$float->ceil();

echo $float->getValue() . PHP_EOL; // results in: 34.0
```

### Contribute ###

If you got suggestions, idea's or improvements , please fork the project and initialize a pull request.

Happy Coding!!
