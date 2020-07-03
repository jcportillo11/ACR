<?php
$PATH = "../";
include $PATH . "components/mockCars.php";

    try{
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            $INPUT = $_GET; //Aqu manejariamos los datos para consultar a la base de datos
            $result = json_encode($CARS_LIST); //Por ahora se traen los datos del mock
            header("HTTP/1.1 200 OK");
            echo $result;
            exit();
        }
        throw new Exception("[METHOD_NOT_ALLOWED]", 405);
    } catch (Exception $e) {
        //Aqui irìa un error handler para guardar logs
    }
?>