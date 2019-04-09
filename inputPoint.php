<?php


include_once 'autoload.php';
include_once 'functions.php';

//Controller_Index::call('Controller_Index');
setRegister(include_once 'config/route.php', 'routes');
Service_Route_Manager::get()->getAction('/user/213112');
Helper_Url::get()->getUri();