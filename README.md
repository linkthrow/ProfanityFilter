# Profanity Filter 2

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Profanity Filter takes strings as input and removes any bad curse words that the string might have. It check the string for specific blacklist which must match as a sperate word to be considered as a curse word. If a curse word is found, then it will replace the curse word with a censor character the user chooses (default is *).

This package is intended to used with Laravel. Tested and working with laravel 5.1.

## Install

Via Composer

``` bash
$ composer require sworup/Profanity Filter 2
```

## Usage

``` php
$profanity_filter = new sworup\ProfanityFilter($swear_words, $blacklist, $replace);
echo $profanity_filter->clean('Hello, League!', '*');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpspec run
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email sworup.shakya@gmail.com instead of using the issue tracker.

## Credits

- [Sworup Shakya][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sworup/profanityfilter.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/sworup/profanityfilter/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/sworup/profanityfilter.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/sworup/profanityfilter.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/league/profanityfilter.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/league/profanityfilter
[link-travis]: https://travis-ci.org/sworup/profanityfilter
[link-scrutinizer]: https://scrutinizer-ci.com/g/sworup/profanityfilter/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/sworup/profanityfilter
[link-downloads]: https://packagist.org/packages/league/profanityfilter
[link-author]: https://github.com/sworup
[link-contributors]: ../../contributors
