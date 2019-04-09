<?php


abstract class Register
{
    public static $pool = [];

    public function __get($name)
    {
        return static::$pool[$name];
    }

    /**
     * @param $name
     * @return $name
     */
    public function __set($name, $val)
    {
        static::$pool[$name] = $val;
    }
}