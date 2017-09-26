<?php

namespace App\Controllers;

use Llambricore\App;

class TaskController {

    /***
     * CRUD:
     * C: Create (create|store).
     * R: Retrieve (index).
     * U: Update (edit|update).
     * D: Delete (destroy).
     */

    public function index() {

        $database = App::resolve('database');
        $tasks = $database->fetchAll('tasks');
        require 'app/views/tasks.view.php';
}

    public function create() {

        require 'app/views/task.add.view.php';

}


    public function store() {

        $database = App::resolve('database');

        $database->insert('tasks', [
            "name" => $_POST['name']

        ]);

        require 'app/views/successfull.view.php';

}



}