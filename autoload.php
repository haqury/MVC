<?php
function autoload($class)
{
    $class = str_replace('_', '/', $class);
    include_once 'Class/' . $class . '.php';
}

spl_autoload_register('autoload');

