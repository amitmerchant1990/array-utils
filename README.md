# Simple wrapper implementation of common PHP array methods 

This is a wrapper class implementation which I've described [in this article](https://www.amitmerchant.com/how-to-implement-wrapper-classes-php/).

## Installation

You can install the package via composer:

```bash
$ composer require amitmerchant/array-utils
```

## Usage

```php
<?php

use Amitmerchant\ArrayUtils\ArrayUtils;

// Map Array

$mappedArray = ArrayUtils::getInstance()
                    ->collect([1, 2, 3, 4])
                    ->map(function($iteration) {
                        return $iteration * 2;
                    });

print_r($mappedArray);
/*
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
)
*/

// Filter Array

$filterArray = ArrayUtils::getInstance()
                    ->collect([1, 2, 3, 4, 5])
                    ->filter(function($iteration) {
                        return ($iteration & 1);
                    });

/*
Array
(
    [0] => 1
    [1] => 3
    [2] => 5
)
*/
```

### Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email bullredeyes@gmail.com instead of using the issue tracker.

## Credits

- [Amit Merchant](https://github.com/amitmerchant1990)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.