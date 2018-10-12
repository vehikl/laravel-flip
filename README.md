# laravel-flip

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Colin DeCarlo``` ```colindecarlo``` ```https://github.com/colindecarlo``` ```c.decarlo@vehikl.com``` ```vehikl``` ```laravel-flip``` ```A Feature Flag implementation for Laravel``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](.github/CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require vehikl/laravel-flip
```

## Usage

``` php
$skeleton = new Vehikl\LaravelFlip();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CODE_OF_CONDUCT](.github/CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email c.decarlo@vehikl.com instead of using the issue tracker.

## Credits

- [Colin DeCarlo][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/vehikl/laravel-flip.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/vehikl/laravel-flip/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/vehikl/laravel-flip.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/vehikl/laravel-flip.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/vehikl/laravel-flip.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/vehikl/laravel-flip
[link-travis]: https://travis-ci.org/vehikl/laravel-flip
[link-scrutinizer]: https://scrutinizer-ci.com/g/vehikl/laravel-flip/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/vehikl/laravel-flip
[link-downloads]: https://packagist.org/packages/vehikl/laravel-flip
[link-author]: https://github.com/colindecarlo
[link-contributors]: ../../contributors
