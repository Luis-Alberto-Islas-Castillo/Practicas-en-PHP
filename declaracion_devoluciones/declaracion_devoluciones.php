<?php
declare(strict_types=1);

function  add(int $numero1, int $numero2) : int
{
    return $numero1 + $numero2;
}

echo add(10, 12);

function greet($name) : string 
{
    return $name;
}

echo '<br/>';

echo greet('Luis Alberto');