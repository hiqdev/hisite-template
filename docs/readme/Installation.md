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
