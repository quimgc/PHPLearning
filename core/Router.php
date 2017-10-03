<?php
namespace Llambricore\Lib;


class Router{

    protected $routes = [
        'GET' =>[],
        'POST' => []
];


  //  private $routes;

    /**
     * Router constructor.
     * @param $routes
     */

    public function define($routes){

        $this->routes = $routes;

    }


    public  function get($uri,$action){
        $this->routes['GET'][$uri] = $action;

    }

    public function post($uri,$action){

        $this->routes['POST'][$uri] = $action;

    }

    public static function load($file){

        $router = new static;

        require $file;

        return $router;

    }


    //l'objectiu es fer un require d'un fitxer que no se sap quin es.
    public function direct($uri,$requestType){
        $uri = trim($uri,'/');

    if(! array_key_exists($uri,$this->routes[$requestType])) {

        throw new Exception("No s'ha trobat cap ruta");
    }

    $action = explode('@',$this->routes[$requestType][$uri]);
    $controller = 'App\Controllers\\'.$action[0];
    $method = $action[1];

/***
 * TODO.
 */

if(!class_exists($controller)) {
    throw new \Exception("No class found!!");

}else{
    $controller = new $controller();
    $controller->$method();

}

        if(!method_exists($controller, $action)){

            throw new Exception("No s'ha trobat el mèotde!");

       }


    }


}