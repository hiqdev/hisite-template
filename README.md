# HiSite

**HiSite Project Template**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hisite-template/v/stable)](https://packagist.org/packages/hiqdev/hisite-template)
[![Total Downloads](https://poser.pugx.org/hiqdev/hisite-template/downloads)](https://packagist.org/packages/hiqdev/hisite-template)
[![Build Status](https://img.shields.io/travis/hiqdev/hisite-template.svg)](https://travis-ci.org/hiqdev/hisite-template)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hisite-template.svg)](https://scrutinizer-ci.com/g/hiqdev/hisite-template/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hisite-template.svg)](https://scrutinizer-ci.com/g/hiqdev/hisite-template/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hisite-template/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hisite-template/dev-master)

HiSite is a way to build modular Yii2 projects with plugins.

This package is a template to start your project with.

It includes:

- [hisite] - hisite basic project
- [yii2-thememanager] - theme manager
- [yii2-theme-original] - Yii2 original theme
- [yii2-theme-flat] - flat theme
- [yii2-pnotify] - JQuery PNotify extension
- [yii2-language] - language switcher
- [yii2-monitoring] - application monitoring

The project uses [hidev] tool to automate repetitive tasks:

- generate and update package files: README, LICENSE, .gitignore, composer.json
- keep CHANGELOG file with [chkipper]
- generate and deploy vhost config file
- run standard tasks such as running tests and php-cs-fixer
- substitute yii console script

[hidev]:                https://hiqdev.com/packages/hidev
[hisite]:               https://hiqdev.com/packages/hisite
[yii2-thememanager]:    https://hiqdev.com/packages/yii2-thememanager
[yii2-theme-original]:  https://hiqdev.com/packages/yii2-theme-original
[yii2-theme-flat]:      https://hiqdev.com/packages/yii2-theme-flat
[yii2-pnotify]:         https://hiqdev.com/packages/yii2-thememanager
[yii2-language]:        https://hiqdev.com/packages/yii2-language
[yii2-monitoring]:      https://hiqdev.com/packages/yii2-monitoring
[chkipper]:             https://hiqdev.com/packages/chkipper

## Installation

The preferred way to install this project is through [composer](http://getcomposer.org/download/).

```sh
php composer.phar create-project "hiqdev/hisite-template:*" directory2install
```

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2017, HiQDev (http://hiqdev.com/)
