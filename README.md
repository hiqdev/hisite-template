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

- [hisite]          - HiSite basic project
- [yii2-theme-flat] - Flat theme
- [yii2-pnotify]    - flash notifications with JQuery [PNotify]
- [yii2-language]   - language detecting and switching
- [yii2-monitoring] - application monitoring

[yii2]:                 http://www.yiiframework.com/
[HiSite]:               https://github.com/hiqdev/hisite
[yii2-theme-flat]:      https://github.com/hiqdev/yii2-theme-flat
[yii2-theme-original]:  https://github.com/hiqdev/yii2-theme-original
[yii2-pnotify]:         https://github.com/hiqdev/yii2-thememanager
[yii2-language]:        https://github.com/hiqdev/yii2-language
[yii2-monitoring]:      https://github.com/hiqdev/yii2-monitoring
[pnotify]:              https://github.com/sciactive/pnotify

[![Live Demo](https://img.shields.io/badge/live-demo-brightgreen.svg)](https://hisite.hiqdev.com/)

## Installation

Preferred way to install this project is through [composer]:

```sh
composer create-project --stability=dev "hiqdev/hisite-template:*" dir
```

To finish project installation run:

```sh
./vendor/bin/hidev deploy
```

You will see:

```
Created dir:  ./public/
Created dir:  ./public/assets/
chmod ./public/assets '0777'
chmod ./runtime '0777'
```

And that's it &mdash; the project is ready to be served with web server.
But [hidev] can do a bit more for you.

Also see more on recommended [Directory structure] of this template.

[Directory structure]: docs/DirectoryStructure.md

### Generate and install NGINX vhost config

Copy [.env.dist] to `.env` and tune it to set project wide options:

- `ENV` - environment env/prod, will be used to setup `YII_ENV` constant
- `SSL` - enable SSL, used for NGINX config
- `HOSTS` - hostname(s), used for NGINX config

To see generated NGINX config without actually installing it use the following command:

```sh
./vendor/bin/hidev nginx/dump
```

To install config and restart NGINX run:

```sh
./vendor/bin/hidev nginx/deploy
```

[composer]:         http://getcomposer.org/download/
[.env.dist]:        .env.dist
[hidev]:            https://github.com/hiqdev/hidev
[chkipper]:         https://github.com/hiqdev/chkipper

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2017, HiQDev (http://hiqdev.com/)
