# pastell-client
Client for the Pastell REST API 


## Exemples

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

$login = "admin";
$password = "CHANGE ME";

$pastellAPI = new Libriciel\PastellClient($login,$password);
$version_info = $pastellAPI->version();

var_dump($version_info);


```
