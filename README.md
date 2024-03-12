![laravel-task-manager](https://github.com/alisalehi1380/laravel-task-manager/assets/111766206/fcc699b8-59b1-447f-a655-865e68cd6d82)

<hr/>

```
composer require alisalehi/laravel-task-manager
```

```
php artisan migrate
```

```
php artisan vendor:publish --tag task-lang
```

4.set your `SMTP` configuration in `.env` file, <b> If you did not set! </b>
```
MAIL_MAILER=smtp
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=
```

<hr/>

if you need to change migration package </br>
```
php artisan vendor:publish --tag task-migration
```

if you need to change configuration package </br>
```
php artisan vendor:publish --tag task-config
```

if you need <ins>change access logged-in</ins> user to all todo package routes Just create your <ins>custom middleware</ins> and </br> 
add it to the ```middleware key``` in config package file </br>

<hr/>

if you need to run manually schedule you can run </br>
```
php artisan schedule:tasks
```

you can see the scheduling tasks by running </br>
```
php artisan schedule:list
```

<hr/>

you can try API endpoints by Postman </br>
https://blue-zodiac-200960.postman.co/workspace/My-Workspace~84f76d8a-4d7d-459a-884d-38d9ae200c34/collection/25647836-05067e13-61e3-4b16-b151-998a65ac80b6?action=share&creator=25647836



