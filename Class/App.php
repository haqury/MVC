<?php

abstract class App
{
    /**
     * @param $controller
     * @return static
     */
    public static function create()
    {
        return new static(func_get_args());
    }

    /**
     * @param $controller
     * @return static
     */
    public static function get()
    {

        if (empty($pool = getRegister(get_parent_class(get_called_class())))
            || empty($pool[get_called_class()])) {
            $pool[get_called_class()] = static::create(func_get_args());
            setRegister($pool[get_called_class()], get_parent_class(get_called_class()));
        }
        return $pool[get_called_class()];
    }
}