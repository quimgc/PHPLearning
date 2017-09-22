<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 21/09/17
 * Time: 21:33
 */

//Model
//$codi = "asdrfd";


require "index.view.php";

Router::load('app/routes.php')->direct($uri);