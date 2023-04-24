<?php 
function conectar($sql){
    $id = "";
    $senha = "";

    $hostweb = false; 
    if($hostweb){
        $id = "xxx";
        $senha = $id."mydb";
    }

    $servidor = "localhost"; 
    $usuario = $id."root";
    $banco = $id."mydb";

    $con = new mysqli($servidor, $usuario, $senha, $banco);

    if($con->connect_error){
        die("erro :".$con->connect_error);
    }
    return $con->query($sql);
}

?>