# Installation & loading

Fakersent PHPMailer does not use a custom email (EX: support@icloud.com) like #Fakersent does.

It uses your email's SMTP settings you can create in such places as cpanel. PHP Mailer changes the name to (FindMyiPhone) and sends the victim whatever you input in the blanks.

This is just a email sender, we made some time ago and don't sand usesupport anymore. So thought it would be nice to share with some others as it still works, and hitting all emails inbox. 

```json
"phpmailer/phpmailer": "~5.2"
```

or

```sh
composer require phpmailer/phpmailer
```

If you want to use the Gmail XOAUTH2 authentication class, you will also need to add a dependency on the `league/oauth2-client` package.
