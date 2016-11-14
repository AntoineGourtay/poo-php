<?php
use Hetic\Human;
use Hetic\Man;
require_once 'vendor/autoload.php';

$moi2 = new Man(95,190);

echo $moi2->getWeight().PHP_EOL;
echo $moi2->boireDesCanons().PHP_EOL;
