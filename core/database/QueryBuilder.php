<?php
namespace Llambricore\Database;


use PDO;
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

    public function insert($table, $fields) {

        implode(',',$fields);
        $columns = implode(',',array_keys($fields));
        $values = ":" . implode(', :',array_keys($fields));

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        try {

            $statment= $this->pdo->prepare($sql);
            $statment->execute($fields);

        } catch (Exception $e) {
            die("Algo ha passat");
        }
        $statment= $this->pdo->prepare($sql);


    }

}