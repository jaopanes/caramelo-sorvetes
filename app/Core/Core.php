<?php

namespace MVCCaramelo\Core;

class Core
{
    public function __construct()
    {
        $flag = false;

        if (isset($_GET['path'])) {
            $token = explode('/', rtrim($_GET['path'], '/'));
            $controllerName = ucfirst(array_shift($token));

            if (file_exists('app/Controllers/' .  $controllerName . "Controller.php")) {
                $controllerName = '\\MVCCaramelo\\Controllers\\' .  $controllerName;
                $controller = new $controllerName();

                if (!empty($token)) {
                    $methodName = array_shift($token);

                    if (method_exists($controller, $methodName)) {
                        $controller->$methodName(@$token);
                    } else {
                        $flag = true;
                        //echo 'Puts! Eu não existo, e você?';
                    }
                } else {
                    $controller->index();
                }
            } else {
                $flag = true;
                //echo 'Puts! Eu não existo, e você?';
            }
        } else {
            $controllerName = '\\MVCCaramelo\\Controllers\\Home';
            $controller = new $controllerName();

            $controller->index();
        }

        if($flag) {
            $controllerName = '\\MVCCaramelo\\Controllers\\Page404';
            $controller = new $controllerName();

            $controller->index();
        }
    }
}
