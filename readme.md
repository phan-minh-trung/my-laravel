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
