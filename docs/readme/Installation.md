Preferred way to install this project is through [composer]:

```sh
composer create-project --stability=dev "hiqdev/hisite-template:*" dir
```

HiSite uses [hidev] to automate repetitive tasks:

- create and chmod standard files and directories needed to run application:
    - `web/index.php`, `src/config/bootstrap.php`
    - `web/assets/`, `runtime/`
- generate and keep up to date package files: README, LICENSE, .gitignore, composer.json
- keep CHANGELOG file with [chkipper]
- run standard tasks such as running tests and `php-cs-fixer`
- substitute `yii` console script

To finish project installation run:

```sh
./vendor/bin/hidev deploy
```

You will see:

```
Created dir:  ./web/
Created dir:  ./web/assets/
chmod ./web/assets '0777'
Written file: ./web/index.php
Written file: ./web/robots.txt
Copied file: ./web/favicon.ico
chmod ./runtime '0777'
Written file: ./src/config/bootstrap.php
```

And that's it &mdash; the project is ready to be served with web server.
But [hidev] can do a bit more for you.

### Generate and install NGINX vhost config

Copy [.env.example] to `.env` and tune it to set project wide options:

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
[.env.example]:     .env.example
[hidev]:            https://github.com/hiqdev/hidev
[chkipper]:         https://github.com/hiqdev/chkipper
