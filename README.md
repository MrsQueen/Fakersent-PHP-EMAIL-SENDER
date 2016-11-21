# Installation & loading

Fakersent PHPMailer does not user custom email. EX: support@icloud.com
This free email sender uses your custom email's SMTP settings this can be found in your webhost cpanel.

```json
"phpmailer/phpmailer": "~5.2"
```

or

```sh
composer require phpmailer/phpmailer
```

If you want to use the Gmail XOAUTH2 authentication class, you will also need to add a dependency on the `league/oauth2-client` package.
