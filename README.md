# feeder

feeder requires a minimum PHP version of 8.0.


check example/feed.php
```php
//example facebook xml
$fApi       = new Api(new Feeder($dproduct, "xml"), new Facebook());
$fApiFeeder = $fApi->create();

print_r($fApiFeeder);

//example google json
$gApi       = new Api(new Feeder($dproduct, "json"), new Google());
$gApiFeeder = $gApi->create();

print_r($gApiFeeder);
```
 
