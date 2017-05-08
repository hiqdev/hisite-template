Preferred way to install this project is through [composer]:

```sh
php composer.phar create-project --stability=dev "hiqdev/hisite-template:*" dir
```

That's it &mdash; the project is ready to be served with web server.
But it can do a bit more.

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

Also this project uses [hidev] tool to automate other tasks:

- generate and chmod standard files and directories needed to run application:
    - `web/index.php`, `src/config/bootstrap.php`
    - `web/assets/`, `runtime/`
- generate and keep up to date package files: README, LICENSE, .gitignore, composer.json
- keep CHANGELOG file with [chkipper]
- run standard tasks such as running tests and `php-cs-fixer`
- substitute `yii` console script

[composer]:         http://getcomposer.org/download/
[.env.example]:     .env.example
[hidev]:            https://github.com/hiqdev/hidev
[chkipper]:         https://github.com/hiqdev/chkipper
