# Simple wrapper implementation of common PHP array methods 

This is a wrapper class implementation which I've described [in this article](https://www.amitmerchant.com/how-to-implement-wrapper-classes-php/).

## Installation

You can install the package via composer:

```bash
composer require amitmerchant/array-utils
```

## Usage

``` php
$mappedArray = ArrayUtils::getInstance()
                    ->collect([1, 2, 3, 4])
                    ->map(function($iteration) {
                        return $iteration * 2;
                    });

print_r($mappedArray);
/**
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
)
*/
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email bullredeyes@gmail.com instead of using the issue tracker.

## Credits

- [Amit Merchant](https://github.com/amitmerchant)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.