<?php
include_once ("Point.php");
include_once ("MovablePoint.php");
$point=new Point(3,5);
$move=new MovablePoint(2,3,4,6);
$point->toString();
"<br>";
$move->toString();