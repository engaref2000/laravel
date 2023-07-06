<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Refrence  

[ laravel-up](https://learning.oreilly.com/library/view/laravel-up/9781098153250/ch03.html#idm45485889005200) 
  

## what content 


## Route Handling

- Basic route definition
```php
// routes/web.php
Route::get('/', function () {
    return 'Hello, World!';
});
```

- Sample website

```php
Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('products', function () {
    return view('products');
});

Route::get('services', function () {
    return view('services');
});

```
- STATIC CALLS

```php
$router->get('/', function () {
    return 'Hello, World!';
});

```



-  Route verbs

```php
Route::get('/', function () {
    return 'Hello, World!';
});

Route::post('/', function () {
    // Handle someone sending a POST request to this route
});

Route::put('/', function () {
    // Handle someone sending a PUT request to this route
});

Route::delete('/', function () {
    // Handle someone sending a DELETE request to this route
});

Route::any('/', function () {
    // Handle any verb request to this route
});

Route::match(['get', 'post'], '/', function () {
    // Handle GET or POST requests to this route
});
```




  Routes calling controller methods

  ```php
      use App\Http\Controllers\WelcomeController;

     Route::get('/', [WelcomeController::class, 'index']);

     ///“string” syntax (Route::get('/', 'WelcomeController@index');) 
```

- Route Parameters

```php
Route::get('users/{id}/friends', function ($id) {
    //
});
```

- Optional route parameters
```php 
Route::get('users/{id?}', function ($id = 'fallbackId') {
    //
});
```
- Regular expression route constraints
```php
Route::get('users/{id}', function ($id) {
    //
})->where('id', '[0-9]+');

Route::get('users/{username}', function ($username) {
    //
})->where('username', '[A-Za-z]+');

Route::get('posts/{id}/{slug}', function ($id, $slug) {
    //
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]+']);
```

- Regular expression route constraint helpers
```php 
Route::get('users/{id}/friends/{friendname}', function ($id, $friendname) {
    //
})->whereNumber('id')->whereAlpha('friendname');

Route::get('users/{name}', function ($name) {
    //
})->whereAlphaNumeric('name');

Route::get('users/{id}', function ($id) {
    //
})->whereUuid('id');

Route::get('users/{id}', function ($id) {
    //
})->whereUlid('id');

Route::get('friends/types/{type}', function ($type) {
    //
})->whereIn('type', ['acquaintance', 'bestie', 'frenemy']);
```

- Route Names 
    - The url() helper
    ```php
    <a href="<?php echo url('/'); ?>">
// Outputs <a href="http://myapp.com/">
    ```
    - Defining route names
    ```php 
    // Defining a route with name() in routes/web.php:
Route::get('members/{id}', [\App\Http\Controller\MemberController::class, 'show'])
    ->name('members.show');

// Linking the route in a view using the route() helper:
<a href="<?php echo route('members.show', ['id' => 14]); ?>">
    ```

