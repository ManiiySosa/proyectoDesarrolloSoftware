<?php
//carga las clases de los controladores
function controllers_autoload($classname){
	include 'controllers/' . $classname . '.php';
}

spl_autoload_register('controllers_autoload');

/*
Registra una función con la cola de __autoload proporcionada por spl. Si la cola aún no ha sido activa, será activada.

Si el código contiene una función __autoload() existente, dicha función debe estar explícitamente registrada en la cola 
de __autoload. Esto es debido a que spl_autoload_register() de hecho reemplazará la caché del motor para la función __autoload() 
mediante spl_autoload() o spl_autoload_call().

Si deben haber varias funciones de autocarga, spl_autoload_register() lo permite. 
De hecho, crea una cola de funciones de autocarga y las recorre en el orden en que fueron definidas. 
Por el contrario, __autoload() sólo puede definirse una vez.*/