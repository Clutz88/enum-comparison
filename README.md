# A package for adding comparison functions to enum classes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/clutz88/enum-comparison.svg?style=flat-square)](https://packagist.org/packages/clutz88/enum-comparison)
[![Tests](https://img.shields.io/github/actions/workflow/status/clutz88/enum-comparison/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/clutz88/enum-comparison/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/clutz88/enum-comparison.svg?style=flat-square)](https://packagist.org/packages/clutz88/enum-comparison)

Provide functions that can be used in Enums for easy comparisons, such as:
```php
TestEnum::test->equals('test')
```

## Installation

You can install the package via composer:

```bash
composer require clutz88/enum-comparison
```

## Usage
Add the trait to your enums
```php
enum TestEnum: string
{
    use HasComparisons;
    
    case test = 'test';
}
```

Call the provided functions when you want to do a comparison of an Enum value
```php
$value_to_test = 'test';
$enum_value_to_test = TestEnum::test;

TestEnum::test->is($enum_value_to_test); // true
TestEnum::test->is($value_to_test); // false
TestEnum::test->isNot($enum_value_to_test); // false
TestEnum::test->isNot($value_to_test); // true
TestEnum::test->equals($value_to_test); // true
TestEnum::test->equals('testing'); // false
TestEnum::test->notEquals('testing'); // true

$enum_value_to_test->equals($value_to_test); // true
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Chris Cutts](https://github.com/Clutz88)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
