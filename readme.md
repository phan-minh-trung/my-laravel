# Notifications

## Email

php artisan make:notification NewPost

Folder created : app/Notifications/NewPost.php

```php
public function via($notifiable)
{
    return $notifiable->prefers_sms ? ['sms'] : ['mail', 'database'];
}
```

Use Notification Facade in Controller
```php

use Illuminate\Support\Facades\Notification;

Notification::send(User::all(), new NewPost());
```

Use Notifiable in Model
```php
$user->notify(new NewPost());
```


Config .env with mailcatcher
```yml
MAIL_HOST=127.0.0.1
MAIL_PORT=1025
```


## Database

php artisan notifications:table
php artisan migrate

## Nexmo , https://github.com/Nexmo/nexmo-laravel

composer require nexmo/client @beta
composer require nexmo/laravel 1.0.0-beta3

config/app.php
Nexmo\Laravel\NexmoServiceProvider::class


Add config in config/services.php

'nexmo' => [
    'key' => env('NEXMO_KEY'),
    'secret' => env('NEXMO_SECRET'),
    'sms_from' => '15556666666',
],

## Slack Notification

- Install the Guzzle HTTP library via Composer
composer require guzzlehttp/guzzle

https://tsuchinoko.slack.com/apps/category/approved

https://hooks.slack.com/services/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

Send Slack notification via provider

composer require maknz/slack
Maknz\Slack\SlackServiceProvider::class,
'Slack' => Maknz\Slack\Facades\Slack::class,
Config file: config/slack.php

# Compiling Assets

node -v
npm -v

npm install --global gulp-cli

## Install module Laravel Elixir

npm install

## Running Elixir

// Run all tasks...
gulp

// Run all tasks and minify all CSS and JavaScript...
gulp --production

## Copying Files & Directories

```javascript
elixir(function(mix) {
    mix.copy('vendor/foo/bar.css', 'public/css/bar.css');
});
```
