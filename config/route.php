<?php

return [
    [
        'name'          => 'Index',
        'pattern'         => '/',
        'controller'    => 'Controller_Index',
        'action'        => 'index',
    ],
    [
        'name'          => 'Index',
        'pattern'         => '/user/{userId}/?',
        'controller'    => 'Controller_Index',
        'action'        => 'index',
    ]
];