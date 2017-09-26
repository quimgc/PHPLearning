<?php

//coment1


//per poder accedir a qualsevbol lloc:
//al boostrap fer:
$pdo = Connection::connect($config);
App::bind('database', new QueryBuilder($pdo));



//aixo no s'ha de posar del bootsrap
$query = App::resolve('database');

$tasks = $query->fetchAll('tasks');
require 'app/views/tasks.view.php';