<?php

/**
 * get params from register
 * @param $name
 * @return Register
 */
function getRegister($name)
{
    return Service_Register::$pool[$name] ?? false;
}

/**
 * set params to register
 * @param mixed $value
 * @param string $name
 */
function setRegister($value, $name)
{
    if (!empty($name)) {
        Service_Register::$pool[$name] = $value;
    } elseif(is_array($value)) {
        Service_Register::$pool[$name] = array_merge(Service_Register::$pool, $value);
    }
}