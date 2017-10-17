<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 19/09/17
 * Time: 17:17
 */


function dump($value){
    //<pre> ... </pre> serveix per oferir un resultat molt més clar.
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

//aquesta funció fa el xivato i s'apara.
//crida inicialment a la funció dump i despres s'atura.
function dd($value){
    dump($value);
    die();

}


//connexio a BD
/**
 * OBSOLET
 * @return PDO
 */
function connect(){

    try {

        return new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','Fox8U2xDeZ1fBcFm');


    } catch (PDOException $e){

        die('Error connecting ' . $e->getMessage() );

    }
}



//obtencio d'informació
/**
 * OBSOLET
 * @param $pdo
 * @return mixed
 */
function fetchAllTask($pdo){


    $statment=$pdo->prepare('SELECT * FROM tasks');


    $statment->execute();


    return $statment->fetchAll(PDO::FETCH_CLASS,'Task');

}


 function view($view){

    require "app/views/$view.view.php";


}