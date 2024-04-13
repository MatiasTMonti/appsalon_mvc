<?php
    namespace Controllers;

    use MVC\Router;

    class DateController {
        public static function index(Router $router) {

            if (!$_SESSION['nombre']) {
                session_start();
            }

            isAuth();

            $router->render('date/index', [
                'nombre' => $_SESSION['nombre'],
                'id' => $_SESSION['id'],
            ]);
        }
    }
?>