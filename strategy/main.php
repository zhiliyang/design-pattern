<?php
require_once dirname(__FILE__) . '/../strategy/strategy.class.php';
require_once dirname(__FILE__) . '/../strategy/strategyDiscount.class.php';
require_once dirname(__FILE__) . '/../strategy/strategySqrt.class.php';
require_once dirname(__FILE__) . '/../strategy/contxt.class.php';

use \strategy\{
    contxt, 
    strategySqrt, 
    strategyDiscount
};

$contxt   = new contxt();

$strategy = new strategySqrt();
$contxt->setStrategy($strategy);
echo $contxt->money(100);
echo PHP_EOL;

$strategy   = new strategyDiscount();
$contxt->setStrategy($strategy);
echo $contxt->money(100);
