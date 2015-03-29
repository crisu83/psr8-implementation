# psr8-implementation
PSR-8 implementation

Based on [PSR-8](https://github.com/php-fig/fig-standards/blob/master/proposed/psr-8-hug/psr-8-hug.md)

It's an april fool, but like all april fool, I like to implement it, and see how it really work.

I've created different object like human, astronaut, robot. They implement `hug()` method. Then, each object can hug an other object.

```php
$human = new Human();
$ewok = new Ewok();

$human->hug($ewok);
```

Whoa ! A human is hugging an ewok :D

You can do a group hug.

```php
$human = new Human();
$ewok = new Ewok();
$walle = new Robot();

$groupHub = new GroupHug();
$groupHug->groupHug([
    $human,
    $ewok,
    $walle
]);
```

Each object will hug each other.
