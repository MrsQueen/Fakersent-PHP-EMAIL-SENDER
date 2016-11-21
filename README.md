# Installation & loading

Fakersent PHPMailer is available via [Composer/Packagist](https://packagist.org/packages/phpmailer/phpmailer) (using semantic versioning), so just add this line to your `composer.json` file:

```json
"phpmailer/phpmailer": "~5.2"
```

or

```sh
composer require phpmailer/phpmailer
```

If you want to use the Gmail XOAUTH2 authentication class, you will also need to add a dependency on the `league/oauth2-client` package.
