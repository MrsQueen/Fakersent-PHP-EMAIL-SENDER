# Installation & loading

Fakersent PHPMailer does not use a custom email. (EX: support@icloud.com) like #Fakersent does.
This is just a email sender, we made some time ago and don't support anymore. So thought it would be nice to share with some others as it still works, all emails hitting inbox. 

```json
"phpmailer/phpmailer": "~5.2"
```

or

```sh
composer require phpmailer/phpmailer
```

If you want to use the Gmail XOAUTH2 authentication class, you will also need to add a dependency on the `league/oauth2-client` package.
