# Linkedin Share v2 API Integration for Laravel
This package allows you to share content in Linkedin with the v2 API

## Installation on Laravel

You can install this package via composer:

```bash
composer require lightit/linkedin-share
```

In Laravel 5.5 the service provider will automatically get registered. In older versions of the Laravel you should add the service provider to the config/app.php file:
```php
'providers' => [
    // ...
    Lightit\LinkedinShare\LinkedinShareServiceProvider::class,
];
```
You can publish the config file with:
```bash
php artisan vendor:publish --provider="Lightit\LinkedinShare\LinkedinShareServiceProvider" --tag="linkedin-share"
```
After publishing the config file, you should declare the following variables in your .env file.

```php
LINKEDIN_SHARE_REDIRECT_URI={your_redirect_uri}
LINKEDIN_SHARE_CLIENT_ID={your_client_id}
LINKEDIN_SHARE_CLIENT_SECRET={your_client_secret}
```
## Sharing content

You will need the user authentication code ($code) to be able to share content in behalf of the user, you will probabily get this code from the fornt-end of your application.

### Sharing text
```php
LinkedinShare::shareNone($code, $text);
```

### Sharing images
```php
LinkedinShare::shareImage($code, $image, $text);
```

### Sharing links
```php
LinkedinShare::shareArticle($code, $url, $text);
```
## Sharing content with access_token
If you prefere to share content using the user access_token, you should include an optional parameter to the share functions.
Example:
```php
LinkedinShare::shareNone($access_token, $text, 'access_token');
```

## Extra functionality
### Getting access token from authentication code
```php
LinkedinShare::getAccessToken($code)
```

## About Lightit
[Light-it](https://lightit.io) is a software development company with offices in Uruguay and Paraguay. 

![alt text](https://lightit.io/images/solo-logo.png)

## License
This project and the Laravel framework are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
