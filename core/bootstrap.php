<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 20/09/17
 * Time: 21:57
 */

$config = require 'config/config.php';
require 'core/lib/functions.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require "core/Router.php";
require "app/routes.php";

$router = new Router();

$router->define($routes);

$pdo = Connection::connect($config);
//comentari2

$query = new QueryBuilder($pdo);
