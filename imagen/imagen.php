<?php
require_once './vendor/autoload.php';

header('Content-Type: image/jpeg');
use Gregwar\Image\Image;

echo Image::open('lago.jpg')
            ->crop(0, 100, 622, 270)
            ->get()
            ;
//Instalar libreria de composer con el comando 
//composer require "gregwar/image":"2.*"