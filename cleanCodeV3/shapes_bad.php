<?php

#drawer.php
class Drawer
{
    function drawAllShapes(array $shapes = [])
    {
        foreach ($shapes as $shape){
            if ($shape instanceof Circle) {
                $shape->drawCircle();
            } else if ($shape instanceof Square) {
                $shape->drawSquare();
            }
        }
    }
}

#circle.php
class Circle
{
    function drawCircle();
}
#triangle.php
class Triangle
{
    function drawTriangle();
}

#square.php
class Square
{
    function drawSquare();
}

