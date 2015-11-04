# Profanity Filter

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Profanity Filter takes strings as input and removes any bad curse words that the string might have. It check the string for specific blacklist which must match as a sperate word to be considered as a curse word. If a curse word is found, then it will replace the curse word with a censor character the user chooses (default is *).

This package is intended to used with Laravel. Tested and working with laravel 5.1.

This code is based on [Fastwebmedia/Profanity-Filter](https://github.com/fastwebmedia/Profanity-Filter). A major part of it is taken from there and I added the things that I thought it required.

## Install

Via Composer

``` bash
$ composer require sworup/Profanity Filter 2
```

## Usage

``` php
$swear_word = ['dog'];
$blacklist  = ['puppy'];
$replace    = ['a' => '(a|a\.|a\-|4|@|Á|á|À|Â|à|Â|â|Ä|ä|Ã|ã|Å|å|α|Δ|Λ|λ)'];

$profanity_filter = new sworup\ProfanityFilter($swear_words, $blacklist, $replace);
echo $profanity_filter->clean('Dog, puppy badpuppy!', '*');

```

The above code would return:

***, ***** badpuppy!


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
[ico-downloads]: https://img.shields.io/packagist/dt/sworup/profanityfilter.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sworup/profanityfilter
[link-travis]: https://travis-ci.org/sworup/profanityfilter
[link-scrutinizer]: https://scrutinizer-ci.com/g/sworup/profanityfilter/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/sworup/profanityfilter
[link-downloads]: https://packagist.org/packages/sworup/profanityfilter
[link-author]: https://github.com/sworup
[link-contributors]: ../../contributors
