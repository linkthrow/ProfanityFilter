# Profanity Filter 2

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Profanity Filter takes strings as input and removes any bad curse words that the string might have. It check the string for specific blacklist which must match as a sperate word to be considered as a curse word. If a curse word is found, then it will replace the curse word with a censor character the user chooses (default is *).

## Install

Via Composer

``` bash
$ composer require sworup/Profanity Filter 2
```

## Usage

``` php
$skeleton = new sworup\ProfanityFilter();
echo $skeleton->clean('Hello, League!', '*');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
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

[ico-version]: https://img.shields.io/packagist/v/league/Profanity Filter 2.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/thephpleague/Profanity Filter 2/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/thephpleague/Profanity Filter 2.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/thephpleague/Profanity Filter 2.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/league/Profanity Filter 2.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/league/Profanity Filter 2
[link-travis]: https://travis-ci.org/thephpleague/Profanity Filter 2
[link-scrutinizer]: https://scrutinizer-ci.com/g/thephpleague/Profanity Filter 2/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/thephpleague/Profanity Filter 2
[link-downloads]: https://packagist.org/packages/league/Profanity Filter 2
[link-author]: https://github.com/sworup
[link-contributors]: ../../contributors
