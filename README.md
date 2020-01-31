# Domain & Email Validation

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use ValidatorPizza\Validator\Validator;

$validator = new Validator();

var_dump($validator->email("ridwan.pamungks@gmail.com"));
```


Domain & Email validate with [http://validator.pizza/](http://validator.pizza/)
