<?php
require_once './vendor/autoload.php';
header('Content-Type: image/jpeg');

use Gregwar\Image\Image;

echo Image::open('Android.jpg')
        ->rectangle( 20, 20, 800, 800, 'red', true )
        ->roundedRectangle( 100, 100, 700, 700, 40, 'orange', true )
        ->get()                
;
//Instalar libreria de composer.
//composer requiere "gregwar/image":"2.*"