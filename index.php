<?php
include "Fan.php";
$fan1=new Fan();
$fan2=new Fan();
$fan1->setRadius(10);
$fan1->setColor('yellow');
$fan1->setIsON(true);
$fan1->setSpeed($fan1::FAST);
echo $fan1->toString()."<br>";
$fan2->setRadius(5);
$fan2->setColor('blue');
$fan2->setIsON(false);
$fan2->setSpeed($fan2::MEDIUM);
echo $fan2->toString();
