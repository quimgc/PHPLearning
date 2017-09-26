<?php
namespace Llambricore\Database;

use PDO;
use PDOException;

class Connection
{

    //Amb una funció static no es pot usar $this.

    public static function connect($config) {

        try {
                    $driver = $config['database']['driver'];
                    $host = $config['database']['host'];
                    $dbname = $config['database']['name'];
                    $username = $config['database']['username'];
                    $password = $config['database']['password'];

                    $dsn = $driver . ':' . $host . ';' . 'dbname='.$dbname;

            return new PDO(
                        $dsn,
                        $username,
                        $password

            );

//return new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','Fox8U2xDeZ1fBcFm');


        } catch (PDOException $e){

            die('Error connecting ' . $e->getMessage() );

        }
    }



}