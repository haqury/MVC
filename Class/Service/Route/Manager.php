<?php


class Service_Route_Manager extends Service
{
    public function __construct()
    {
        $this->params = Helper_Url::get()->getUri();
        $routes = getRegister('routes');
        foreach ($routes as &$route) {
            preg_match_all('|{([^}]+)}|', $route['pattern'], $params);
            $route['pattern'] = !empty($params[0]) ? str_replace($params[0], '(.+)', $route['pattern']) : $route['pattern'];
            $route['params'] = $params[1];
        }
        $this->routes = $routes;
    }


    public function getAction($url)
    {
        foreach (array_reverse($this->routes) as $route) {
            if (preg_match_all('|' . $route['pattern'] . '|', $url, $params) != false) {
                unset($params[0]);
                if(!empty($params) && count($params) == count($route['params'])) {
                    $route['params'] = array_combine($route['params'], $params);
                }
                return $route;
            }
        }
    }
}