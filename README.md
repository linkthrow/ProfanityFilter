# Profanity Filter

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Profanity Filter takes strings as input and removes any bad curse words that the string might have. It check the string for specific blacklist which must match as a sperate word to be considered as a curse word. If a curse word is found, then it will replace the curse word with a censor character the user chooses (default is *).

Default curse words from Shuttershock list of banned words
https://github.com/shutterstock/List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words

This package is intended to used with Laravel. Tested and working with laravel 5.1.

This code is based on [Fastwebmedia/Profanity-Filter](https://github.com/fastwebmedia/Profanity-Filter). A major part of it is taken from there and I added the things that I thought it required.

## Install

Via Composer

``` bash
$ composer require LinkThrow/profanityfilter
```

###Laravel
Add ```LinkThrow\ProfanityFilter\ProfanityFilterServiceProvider::class``` to your providers array.

If you wish to use the Facade then add 
```'Profanity' => LinkThrow\ProfanityFilter\Facades\Profanity::class```

The package will automatically use the config file containing the list of banned words. 


## Usage

``` php
$swear_word = ['dog'];
$blacklist  = ['puppy'];
$replace    = ['a' => '(a|a\.|a\-|4|@|Á|á|À|Â|à|Â|â|Ä|ä|Ã|ã|Å|å|α|Δ|Λ|λ)'];

$profanity_filter = new LinkThrow\ProfanityFilter($swear_words, $blacklist, $replace);
echo $profanity_filter->clean('Dog, puppy badpuppy baddog!', '$');

```

The above code would return:

``` php
array(
    'old_string' => 'Dog, puppy badpuppy baddog!',
    'new_string' => '$$$, $$$$$ badpuppy bad$$$!',
    'clean'      => false
);

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

If you discover any security related issues, please email LinkThrow.shakya@gmail.com instead of using the issue tracker.

## Credits

- [LinkThrow Shakya][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/LinkThrow/profanityfilter.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/LinkThrow/ProfanityFilter/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/LinkThrow/ProfanityFilter.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/LinkThrow/ProfanityFilter.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/LinkThrow/profanityfilter.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/LinkThrow/profanityfilter
[link-travis]: https://travis-ci.org/LinkThrow/ProfanityFilter
[link-scrutinizer]: https://scrutinizer-ci.com/g/LinkThrow/ProfanityFilter/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/LinkThrow/ProfanityFilter
[link-downloads]: https://packagist.org/packages/LinkThrow/profanityfilter
[link-author]: https://github.com/LinkThrow
[link-contributors]: ../../contributors
