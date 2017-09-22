<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 20/09/17
 * Time: 21:19
 */

class Connection
{

    //Amb una funció static no es pot usar $this.

    public static function connect($config) {

        try {

            /**
             * TODO.
             */
//            $username = $config['database']['username'];
//          //  dd($username);
//         $password = $config['database']['password'];
//         $driver = $config['database']['driver'];
//         $host = $config['database']['host'];
//         $dbname = $config['database']['name'];
//
//            $prova = $config['database']['driver'].':'.$config['database']['host'].';dbname='.$config['database']['name'];
//            dd($prova);
//        // dd($password);
//
//            $dsn = $driver.':host=' . $host . ';dbname=' . $dbname;
//
//            return new PDO($dsn,
//                $username,
//                $password);

return new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','Fox8U2xDeZ1fBcFm');


        } catch (PDOException $e){

            die('Error connecting ' . $e->getMessage() );

        }
    }



}