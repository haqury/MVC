<?php


class Service_Register extends Register
{
    /**
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        return self::$pool[$name];
    }
}