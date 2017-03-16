# HiSite

**HiSite**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hisite/v/stable)](https://packagist.org/packages/hiqdev/hisite)
[![Total Downloads](https://poser.pugx.org/hiqdev/hisite/downloads)](https://packagist.org/packages/hiqdev/hisite)
[![Build Status](https://img.shields.io/travis/hiqdev/hisite.svg)](https://travis-ci.org/hiqdev/hisite)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hisite.svg)](https://scrutinizer-ci.com/g/hiqdev/hisite/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hisite.svg)](https://scrutinizer-ci.com/g/hiqdev/hisite/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hisite/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hisite/dev-master)

HiSite is a way to build modular Yii2 projects with plugins.

This package is a skeleton to start your project with.

It includes:

- [hisite-core](https://hiqdev.com/packages/hisite-core) - theme manager
- [yii2-thememanager](https://hiqdev.com/packages/yii2-thememanager) - theme manager
    - [yii2-theme-original](https://hiqdev.com/packages/yii2-theme-original) - Yii2 original theme
    - [yii2-theme-flat](https://hiqdev.com/packages/yii2-theme-original) - flat theme
- [yii2-pnotify](https://hiqdev.com/packages/yii2-thememanager) - theme manager
- [yii2-language](https://hiqdev.com/packages/yii2-language) - language switcher
- [yii2-error-notifier](https://hiqdev.com/packages/yii2-error-notifier) - error notifier
- to be continued...

The project extensively uses [hidev]() tool to automate repetitive tasks:

- generate and update package files: README, license, composer.json
- generate and deploy vhost config file
- run standard tasks such as running tests and php-cs-fixer
- substitute yii console script

## Installation

The preferred way to install this project is through [composer](http://getcomposer.org/download/).

```sh
php composer.phar create-project "hiqdev/hisite:*" directory2install
```

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2017, HiQDev (http://hiqdev.com/)
