<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 22/09/17
 * Time: 16:26
 */

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


    public  function get($uri,$file){
        $this->routes['GET'][$uri] = $file;

    }

    public function post($uri,$file){

        $this->routes['POST'][$uri] = $file;

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

        require $this->routes[$requestType][$uri];

//equivalent al de d'alt:

//
//            if(array_key_exists($this->routes,$uri)){
//            require $this->routes[$uri];
//
//        }else{
//            //404
//            throw new Exception("No s'ha trobat cap ruta");
//        }
    }


}