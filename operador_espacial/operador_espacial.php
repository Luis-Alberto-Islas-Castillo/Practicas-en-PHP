<?php
declare(strict_types=1);

$user['azul'] = 8;
$user['rojo'] = 9;
$user['verde'] = 8;

echo $user ['azul'] <=> $user['rojo'];
echo '<br/>';
echo $user ['azul'] <=> $user['verde'];
echo '<br/>';
echo $user ['rojo'] <=> $user['verde'];

