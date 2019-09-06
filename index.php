<?php
include "Fan.php";
$fan1=new Fan();
$fan2=new Fan();
$fan1->setRadius(10);
$fan1->setColor('yellow');
$fan1->setIsON(true);
$fan1->setSpeed(3);
echo $fan1->toString()."<br>";
$fan2->setRadius(5);
$fan2->setColor('blue');
$fan2->setIsON(false);
$fan2->setSpeed(2);
echo $fan2->toString();
