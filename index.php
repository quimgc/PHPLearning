<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 21/09/17
 * Time: 21:33
 */

//Model
//$codi = "asdrfd";


//require "index.view.php";
require 'core/bootstrap.php';

//$uri = "contact";


$uri = Request::uri();
$requestType =Request::type();


//dd($_SERVER);
//$uri=$_SERVER['REQUEST_URI'];



//amb la instrucció trim('/about/','/'); sen's carregaria les barres.

Router::load('app/routes.php')->direct($uri,$requestType);

//això és equivalent a:

//$router = new Router();
//
//$router->load(app/routes.php);
//$router->direct($uri);