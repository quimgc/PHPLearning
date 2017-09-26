<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 21/09/17
 * Time: 21:33
 */

use Llambricore\Lib\Router;

require 'core/bootstrap.php';

Router::load('app/routes.php')->direct(Request::uri(),Request::type());
