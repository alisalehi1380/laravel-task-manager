1.```php artisan migrate``` </br>

2.```php artisan vendor:publish --tag task-lang```

3.step => you should set your SMTP configuration in .env file, <b> if not set! </b>
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

if you need change migration package </br>
```php artisan vendor:publish --tag task-migration``` </br>

if you need to change configuration package </br>
```php artisan vendor:publish --tag task-config```

if you need <ins>change access logged-in</ins> user to all todo package routes Just create your <ins>custom middleware</ins> and </br> 
add it to the ```middleware key``` in config package file </br>

<hr/>

if you need run manually schedule you can run </br>
```php artisan schedule:tasks```

you can see the scheduling tasks by run </br>
```php artisan schedule:list```

<hr/>

you can try api endpoints by postman </br>
https://blue-zodiac-200960.postman.co/workspace/My-Workspace~84f76d8a-4d7d-459a-884d-38d9ae200c34/collection/25647836-05067e13-61e3-4b16-b151-998a65ac80b6?action=share&creator=25647836



