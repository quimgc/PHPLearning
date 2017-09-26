<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 20/09/17
 * Time: 21:57
 */

use Llambricore\App;

use Llambricore\Database\Connection;

use Llambricore\Database\QueryBuilder;

$config = require 'config/config.php';

require 'core/lib/functions.php';

require "vendor/autoload.php";

$pdo = Connection::connect($config);

App::bind('database',new QueryBuilder($pdo));

