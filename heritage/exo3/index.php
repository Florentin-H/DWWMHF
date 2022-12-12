<?php
require "ClassRectangle.php";
require "ClassTriangleRectangle.php";
require "ClassCercle.php";

$rectangle1 = new rectangle(10, 5);
$TriangleRectangle1 = new TriangleRectangle(10, 5);
$cercle1 = new Cercle(20);



echo $rectangle1->Perimetre($rectangle1);
echo $rectangle1->Aire($rectangle1);

echo $rectangle1->AfficherRectangle($rectangle1);





echo $TriangleRectangle1->Perimetre($TriangleRectangle1);
echo $TriangleRectangle1->Aire($TriangleRectangle1);

echo $TriangleRectangle1->AfficherTriangleRectangle($TriangleRectangle1);





echo $cercle1->Perimetre($cercle1);
echo $cercle1->Aire($cercle1);

echo $cercle1->AfficherCercle($cercle1);



echo $cercle1->Perimetre($cercle1);
echo $cercle1->Aire($cercle1);

echo $cercle1->AfficherCercle($cercle1);
