<?php

namespace App\Logic;

class Router {
    private static string $url;
    private static string $lng;
    private static string $base;
    private static array $post = [];
    private static array $get = [];

    public static function get($path, $function) {
        array_push(self::$get, array(
            'path'     => $path,
            'function' => $function,
        ));
    }

    public static function post($path, $function) {
        array_push(self::$post, array(
            'path'     => $path,
            'function' => $function,
        ));
    }

    public static function dispatch($basepath = '/') {
        $url = parse_url($_SERVER['REQUEST_URI']);
        if(isset($url['path']) and $url['path'] != '/'){
            $path = rtrim($url['path'], '/');
        }
        else {
            $path = '/';
        }

        $status = false;
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        if($method == strtolower('post')){
            $routes = self::$post;
        }
        elseif($method == strtolower('get')) {
            $routes = self::$get;
        }

        foreach($routes as $route) {
            if($basepath != '' and $basepath != '/'){
                $route['path'] = '(' . $basepath . ')' . $route['path'];
            }
            $route['path'] = '#^' . $route['path'] . '$#i';
            if(preg_match($route['path'], $path, $matches)){
                array_shift($matches);
                if($basepath != '' && $basepath != '/'){
                    array_shift($matches);
                }
                $input_arguments = $matches;
                if(is_string($route['function'])){
                    $explode    = explode('@', $route['function']);
                    $controller = "\App\Controllers\\" . $explode[0];
                    $action     = $explode[1];
                    $execute    = new $controller();
                    $execute->{$action}((!empty($input_arguments) ? extract($input_arguments) : null));
                    $status = true;
                }
                else {
                    call_user_func_array($route['function'], $input_arguments);
                    $status = true;
                }
            }

            if($status){
                break;
            }
        }

        if($status === false){
            self::notfoundurl();
        }
    }

    public static function notFoundUrl() {
        http_response_code(404);
        include_once '../templates/status-codes/page.404.php';
    }

}