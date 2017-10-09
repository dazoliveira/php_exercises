<?php
define("XMAX", 20);
define("YMAX", 20);

function distancia($usuario_X, $usuario_Y, $carro_X, $carro_Y){
    $distancia = 0;

    //distancia horizontal
    $distancia += abs($usuario_X - $carro_X);

    //distancia vertical
    $distancia += abs($usuario_Y - $carro_Y);

    return $distancia;
}
