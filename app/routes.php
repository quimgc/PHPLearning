<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 21/09/17
 * Time: 21:44
 */

use Llambricore\Lib\Router;

$router = new Router();
//Route::get('','PagesController@home');
$router->get('','PagesController@home');
$router->get('index.php','PagesController@home');
$router->get('contact','PagesController@contact');
$router->get('about','PagesController@about');
$router->get('news','PagesController@news');
$router->get('tasks','TaskController@index');
$router->get('task','TaskController@create');
$router->post('task','TaskController@store');


$router->get('error','TasksControllerNOR@error');


