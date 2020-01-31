# Domain & Email Validation

## Domain Validation
```php
<?php
require __DIR__ . '/vendor/autoload.php';

use ValidatorPizza\Validator\Validator;

$validator = new Validator();

var_dump($validator->domain("google.com")); // true|false
```

## Email Validation
```php
$validator = new Validator();

var_dump($validator->email("ridwan.pamungks@gmail.com")); // true|false
```


Domain & Email validate with [http://validator.pizza/](http://validator.pizza/)
