<?php
spl_autoload_register('autoLoader');
function autoLoader($classname){
    include $classname.'.php';
    
}
?>
