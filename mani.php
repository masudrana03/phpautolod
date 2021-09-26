<?php

// function __autoload($name){
//     include "{$name}.php";
// }

function autoload($name){
    include strtolower("{$name}.php");
}
spl_autoload_register('autoload');

(new Spaceship)->launch();
echo PHP_EOL;
(new bike)->bikeName();






// include_once "bike.php";
// include_once "planat.php";
// include_once "spaceship.php";




