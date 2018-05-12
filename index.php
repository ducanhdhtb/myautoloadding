<?php
require_once('autoload.php');
use My\Application as Myapp;
$a=new Myapp\test;
echo "<br>";
$b = new Myapp\rain;
$b->rain();
$a->test();




