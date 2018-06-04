<?php
include_once('./classes/Figure.php');
include_once ('./classes/A_Figure.php');
include_once ('./classes/Figure_Collection.php');
include_once('./classes/Rprism.php');
include_once('./classes/Cone.php');
include_once('./classes/Cube.php');
include_once('./classes/Cylinder.php');
include_once('./classes/Pyramid.php');
include_once('./classes/Sphere.php');

$Cone= new Cone(15, 8);
        echo $Cone->getHeight() . "<br>";
        echo $Cone->getRadius() . "<br>";
        echo "de inhoud van de kegel = " . $Cone->getVolume() . " kubieke centimeter" . "<br>";
        echo "de oppervlakte van de kegel = " . $Cone->getSurfaceArea() . "vierkante centimeter";
        echo "<br><br>";

$Cube = new Cube(76);
        echo $Cube->getLength() . "<br>";
        echo "de inhoud van de kubus = " . $Cube->getVolume() . " kubieke centimeter" . "<br>";
        echo "de oppervlakte van een kubus = " . $Cube->getSurfaceArea() . " vierkante centimeter";
        echo "<br><br>";

$Cylinder = new Cylinder(12, 32);
        echo $Cylinder->getHeight() . "<br>";
        echo $Cylinder->getRadius() . "<br>";
        echo "de inhoud van de cilinder = " . $Cylinder->getVolume() . " kubieke centimeter" . "<br>";
        echo  "de oppervlakte van de cilinder = " . $Cylinder->getSurfaceArea() . " vierkante centimeter";
        echo "<br><br>";

$Pyramid = new Pyramid(54, 27);
        echo $Pyramid->getHeight() . "<br>";
        echo $Pyramid->getBase() . "<br>";
        echo "de inhoud van de piramide = " . $Pyramid->getVolume() . " kubieke centimeter" . "<br>";
        echo "de oppervlakte van de piramide = " . $Pyramid->getSurfaceArea() . " vierkante centimeter";
        echo "<br><br>";

$Rprism = new Rprism(22, 11, 41);
        echo $Rprism->getLength() . "<br>";
        echo $Rprism->getWidth() . "<br>";
        echo $Rprism->getHeight() . "<br>";
        echo "de inhoud van de rechthoekige prisma = " . $Rprism->getVolume() . " kubieke centimeter" . "<br>";
        echo "de oppervlakte van een rechthoekige prisma = " . $Rprism->getSurfaceArea() . " vierkante centimeter";
        echo "<br><br>";

$Sphere = new Sphere(5);
        echo  $Sphere->getRadius() . "<br>";
        echo "de inhoud van de bol = " . $Sphere->GetVolume() . " kubieke centimeter" . "<br>";
        echo "de oppervlakte van een bol = " . $Sphere->getSurfaceArea() . " vierkante centimeter";
        echo "<br><br>";

$volume = array
(
    $Cone->getVolume(),
    $Cube->getVolume(),
    $Cylinder->getVolume(),
    $Pyramid->getVolume(),
    $Rprism->getVolume(),
    $Sphere->getVolume(),
);

echo min($volume);
echo "<br><br>";
//$figurecollection = new Figure_Collection(
//    array
//    (
//        Cone::class,
//        Cube::class,
//        Cylinder::class,
//        Pyramid::class,
//        Rprism::class,
//        Sphere::class
//    ));

$figurecollection = new Figure_Collection([
    new Cone(15, 8),
    new Cube(22),
    new Cylinder(12, 6),
    new Pyramid(8, 19),
    new Rprism(15, 7, 11),
    new Sphere(9),
]);

var_dump( $Pyramid);
echo "<br><br>";
var_dump($Rprism);
echo "<br><br>";
$Pyramid = clone $Rprism;
var_dump ($Pyramid);

echo "<br><br>";
var_dump(count($figurecollection));

echo "<br><br>";
var_dump(serialize($figurecollection));

echo "<br><br>";
var_dump($figurecollection->some(function(Figure $f){ return $f->getVolume() > 10 ; }));

echo "<br><br>";
var_dump($figurecollection->every(function(Figure $f){ return $f->getVolume() > 10; }));

echo "<br><br>";
var_dump($figurecollection->__debugInfo());

echo "<br><br>";
var_dump($figurecollection->min());

echo "<br><br>";
var_dump($figurecollection->max());

echo "<br><br>";
var_dump($figurecollection->findIndex(function (Figure $f){return $f->getVolume() > 0;}));

echo "<br><br>";
var_dump($figurecollection->find(function (Figure $f){return $f->getVolume() > 0;}));