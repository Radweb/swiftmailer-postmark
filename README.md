# swiftmailer-postmark

[![CircleCI](https://circleci.com/gh/Radweb/swiftmailer-postmark.svg?style=svg)](https://circleci.com/gh/Radweb/swiftmailer-postmark)

An unofficial Swiftmailer Transport for Postmark.

You're just steps away from super simple sending via Postmark:

##### 1. Include this package in your project:

```bash
composer require radweb/swiftmailer-postmark
```
##### 2. Construct the Postmark Transport and pass it to your `Swift_Mailer` instance:

```php
$transport = new \Radweb\Postmark\Transport("<YOUR_SERVER_TOKEN>");
$mailer = new Swift_Mailer($transport);
```

