```php artisan migrate --seed```

<hr/>

if you need to change configuration package </br>
```php artisan vendor:publish --tag task-config```

if you need change migration package </br>
```php artisan vendor:publish --tag task-migration```

if you need change access logged-in user to all todo package routes </br>
``` Just create your custom middleware and add it to the middleware key in config package file``` </br>

![image](https://github.com/alisalehi1380/todo-package/assets/111766206/feab48d8-bfe0-49fe-aad1-a187c187ff8c)

<hr/>

if you want run a manually schedule you can run </br>
``` php artisan schedule:tasks ```

If you run ``` php artisan schedule:list ``` you can see the scheduling tasks </br>

![image](https://github.com/alisalehi1380/todo-package/assets/111766206/c1252d85-9cc5-44b0-bb6f-5f49fcfca701)

<hr/>

you can try api endpoints by postman </br>
https://blue-zodiac-200960.postman.co/workspace/My-Workspace~84f76d8a-4d7d-459a-884d-38d9ae200c34/collection/25647836-05067e13-61e3-4b16-b151-998a65ac80b6?action=share&creator=25647836



