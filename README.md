first step => run </br>
```php artisan migrate```

if you need change migration package </br>
```php artisan vendor:publish --tag task-migration```

second step => you should set your SMTP configuration in .env file, <b> if not set! </b>
```
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}
```

<hr/>

if you need to change configuration package </br>
```php artisan vendor:publish --tag task-config```

if you need to change test errors and successes in api message </br>
```php artisan vendor:publish --tag task-lang```

if you need change access logged-in user to all todo package routes </br>
Just create your <ins>custom middleware</ins> and add it to the ```middleware key``` in config package file </br>

<hr/>

if you need run manually schedule you can run </br>
```php artisan schedule:tasks```

If you run ```php artisan schedule:list``` you can see the scheduling tasks </br>

<hr/>

you can try api endpoints by postman </br>
https://blue-zodiac-200960.postman.co/workspace/My-Workspace~84f76d8a-4d7d-459a-884d-38d9ae200c34/collection/25647836-05067e13-61e3-4b16-b151-998a65ac80b6?action=share&creator=25647836



