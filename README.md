# HiSite Template

**HiSite Project Template**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hisite-template/v/stable)](https://packagist.org/packages/hiqdev/hisite-template)
[![Total Downloads](https://poser.pugx.org/hiqdev/hisite-template/downloads)](https://packagist.org/packages/hiqdev/hisite-template)
[![Build Status](https://img.shields.io/travis/hiqdev/hisite-template.svg)](https://travis-ci.org/hiqdev/hisite-template)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hisite-template.svg)](https://scrutinizer-ci.com/g/hiqdev/hisite-template/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hisite-template.svg)](https://scrutinizer-ci.com/g/hiqdev/hisite-template/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hisite-template/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hisite-template/dev-master)

[HiSite] is a base project for building modular [Yii2] web applications from plugins.

This package is a template to start your HiSite project with.

It includes:

- [hisite] - HiSite basic project
- [yii2-theme-original] - Yii2 original theme
- [yii2-pnotify] - flash notifications with JQuery [PNotify]
- [yii2-language] - language switcher
- [yii2-monitoring] - application monitoring

[yii2]:                 http://www.yiiframework.com/
[HiSite]:               https://github.com/hiqdev/hisite
[yii2-theme-original]:  https://github.com/hiqdev/yii2-theme-original
[yii2-pnotify]:         https://github.com/hiqdev/yii2-thememanager
[yii2-language]:        https://github.com/hiqdev/yii2-language
[yii2-monitoring]:      https://github.com/hiqdev/yii2-monitoring
[pnotify]:              https://github.com/sciactive/pnotify

[![Live Demo](https://img.shields.io/badge/live-demo-brightgreen.svg)](https://hisite.hiqdev.com/)

## Installation

Preferred way to install this project is through [composer]:

```sh
php composer.phar create-project --stability=dev "hiqdev/hisite-template:*" dir
```

Copy [.env.example] to `.env` and tune it to set project wide options:

- `ENV` - environment env/prod, will be used to setup `YII_ENV` constant
- `SSL` - enable ssl, used for generating nginx config, see below
- `HOSTS` - hostname(s), used for generating nginx config, see below

The project uses [hidev] tool to automate repetitive tasks:

- generate and chmod standard files and directories needed to run application:
    - `web/index.php`, `src/config/bootstrap.php`
    - `web/assets/`, `runtime/`
- generate and keep up to date package files: README, LICENSE, .gitignore, composer.json
- keep CHANGELOG file with [chkipper]
- run standard tasks such as running tests and `php-cs-fixer`
- substitute `yii` console script

Also [hidev] can generate and install nginx vhost config with this command:

```sh
./vendor/bin/hidev nginx/deploy
```

[composer]:         http://getcomposer.org/download/
[.env.example]:     .env.example
[hidev]:            https://github.com/hiqdev/hidev
[chkipper]:         https://github.com/hiqdev/chkipper

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2017, HiQDev (http://hiqdev.com/)
