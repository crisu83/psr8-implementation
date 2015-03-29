<?php

require_once 'Psr/Hug/Huggable.php';
require_once 'Psr/Hug/GroupHuggable.php';
require_once 'Robot.php';
require_once 'Ewok.php';
require_once 'Astronaut.php';
require_once 'Human.php';
require_once 'GroupHug.php';

use Object\Human;
use Object\Ewok;
use Object\Astronaut;
use Object\Robot;
use Object\GroupHug;

$human = new Human();
$ewok = new Ewok();
$astronaut = new Astronaut();
$robot = new Robot();
$walle = new Robot();

echo 'Human hug a robot:' . PHP_EOL;
$human->hug($robot);

echo 'Group hug:' . PHP_EOL;
$groupHug = new GroupHug();
$groupHug->groupHug([
    $ewok,
    $astronaut,
    $walle,
]);
