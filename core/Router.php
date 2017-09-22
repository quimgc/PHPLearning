<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 22/09/17
 * Time: 16:26
 */

class Router{


    private $routes;

    /**
     * Router constructor.
     * @param $routes
     */

    public function define($routes){

        $this->routes = $routes;

    }

    public static function load($file){

        $router = new static;
        $router->define(require $file);
        return $router;

    }


    //l'objectiu es fer un require d'un fitxer que no se sap quin es.
    public function direct($uri){

// aixo retorna un boolean        array_key_exists($this->routes,$uri)
        require $this->routes[$uri];
    }


}