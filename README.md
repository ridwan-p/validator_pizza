# Domain & Email Validation

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use ValidatorPizza\Validator\Validator;

$valid = new Validator();
$isValid = $valid->email("ridwan.pamungks@gmail.com");

var_dump($isValid);
```


Domain & Email validate with [http://validator.pizza/](http://validator.pizza/)
