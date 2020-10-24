<?php

require __DIR__ . '../vendor/autoload.php';
require_once '../src/Wcs/Hello.php';

$hello = new App\Wcs\Hello();
echo $hello->talk();