<?php


class Helper_Url extends Helper
{
    public function getUri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}