<?php 

namespace Airist\PhpMvc\App;

class Router {

    private static array $routes = [];

    // mapping from route
    // http method yang boleh di control
     public static function add(string $method,
                               string $path,
                               string $controller,
                               string $function,
                               array  $middlewares = []): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middlewares
        ];
    }

    public static function run(): void
    {
        $path = '/';
        // Cari path , jika path ada path diganti path info
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            
            $pattern = '#^' . $route['path'] . '$#';

            if(preg_match($pattern, $path, $variables) && $method == $route['method']) {
                // echo "Controller: " . $route['controller'] . ', Function ' . $route['function'];

                $controller = new $route['controller'];
                $function = $route['function'];

                // $controller->$function();

                array_shift($variables);
                call_user_func_array([$controller, $function], $variables);

                return;
            }
            

            $pattern = "#^" . $route['path'] . "$#";
            if (preg_match($pattern, $path, $variables) && $method == $route['method']) {

                // call middleware
                foreach ($route['middleware'] as $middleware){
                    $instance = new $middleware;
                    $instance->before();
                }

                $function = $route['function'];
                $controller = new $route['controller'];
                // $controller->$function();

                array_shift($variables);
                call_user_func_array([$controller, $function], $variables);

                return;
            }
        }

        http_response_code(404);
        echo 'CONTROLLER NOT FOUND';
    }

}


?>