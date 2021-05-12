<?php
use movePoint\Point;
use movePoint\MoveAblePoint;

include_once "movePoint/Point.php";
include_once "movePoint/MoveAblePoint.php";

$point  = new Point(4,5);
$movePoint = new MoveAblePoint(6,7,4,4);

echo $point;
echo "<br>";
echo $movePoint;
echo "<br>";
$movePoint->move();
$movePoint->move();
