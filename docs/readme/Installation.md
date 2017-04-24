Preferred way to install this project is through [composer]:

```sh
php composer.phar create-project --stability=dev "hiqdev/hisite-template:*" dir
```

Copy and tune [.env.example] to set project wide options.

Also [hidev] can generate and install nginx vhost config with this command:

```sh
./vendor/bin/hidev nginx/deploy
```

[composer]: http://getcomposer.org/download/
[.env.example]: .env.example
