## How it works

you need to have a .htaccess file to redirect everything

```bash
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]
```

then inside that file you can use the router to handle your main php file

```php
Router::get("/test","test.php");
```

or

```php
Router::handle("GET","/test","test.php");
```

or you can pass anonymus and predefined functions to handle

```php
Router::handle("GET","/test",function(){
    echo "test function";
});

```

or

```php
function testMe(){
    echo "testMe function is not an anonymus function ";
}
Router::get("/test","testMe");

```