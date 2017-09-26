<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 20/09/17
 * Time: 21:28
 */

class QueryBuilder {


    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }





    public function fetchAll($table){


        $statment= $this->pdo->prepare('SELECT * FROM ' . $table);


        $statment->execute();


        return $statment->fetchAll(PDO::FETCH_CLASS);

    }


    /**
     * TODO.
     * @param $table
     * @param $filters
     */
    public function where($table, $filters) {


    }

}