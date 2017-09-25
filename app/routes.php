<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 21/09/17
 * Time: 21:44
 */

//s'ha de referenciar als controllers
//return [
//
//    '' => 'app/controller/home.php',
//    'index.php' => 'app/controller/home.php',
//
//    'contact' => 'app/controller/contact.php',
//    'about' => 'app/controller/about.php',
//    'news' => 'app/controller/news.php',
//    'tasks' => 'app/controller/tasks.php',
//
//    'task/add' => 'app/controller/addTask.php',
//    'task_add' => 'app/controller/addTask1.php'
//
//];

$router = new Router();

$router->get('','app/controller/home.php');
$router->get('index.php','app/controller/home.php');
$router->get('contact','app/controller/contact.php');
$router->get('about','app/controller/about.php');
$router->get('news','app/controller/news.php');
$router->get('tasks','app/controller/tasks.php');
$router->get('task','app/controller/addTask.php');
$router->post('task','app/controller/addTask1.php');