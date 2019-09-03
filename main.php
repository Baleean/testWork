<?php

use Classes\Animals\Chicken;
use Classes\Animals\Cow;
use Classes\Cowshed;

require 'vendor/autoload.php';

$ch = new Cowshed(['Cow' => 10, 'Chicken' => 20]);
$ch->addChicken(new Chicken());
$ch->addCow(new Cow());
$ch->getAllProducts();
$ch->getAllProducts();
$ch->getAllProducts();
$ch->getAllProducts();
$ch->getAllProducts();
$ch->getAllProducts();
$ch->getAllProducts();
$ch->getAllProducts();
