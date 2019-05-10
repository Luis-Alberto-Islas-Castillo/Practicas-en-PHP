<?php
declare(strict_types=1);

define('CONFIG', [
                    'localhost',
                    'luis',
                    'alberto'
    ] 
    );

define('BD', [
                'HOST' => '127.0.0.1',
                'NOMBRE' => 'Hola_Mundo',
                'USUARIO' => 'Admin'
    ]  
    );

echo '<pre>';
var_dump(CONFIG);
var_dump(BD);

echo BD['HOST'];
echo '<pre>';
echo BD['NOMBRE'];
