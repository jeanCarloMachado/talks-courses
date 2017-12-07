<?php

#drawer.php
class Drawer
{
    function drawAllShapes(array $shapes = [])
    {
        foreach ($shapes as $shape){
            $shape->draw();
        }
    }
}
interface Shape
{
    function draw();
}

#circle.php
class Circle implements Shape
{
    function draw();
}

#square.php
class Square implements Shape
{
    function draw();
}
