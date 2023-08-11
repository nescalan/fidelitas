<?php

function actualizaUsuario($objeto){

    try{

        if($objeto->Nombre === "Patri"){
            throw new Exception("Sucedió un error provocado por el usuario.");
        }

        $conexionAbierta = IniciarConexion();

        $consulta = "UPDATE T_Clientes SET Nombre = '".$objeto->Nombre."', Apellido1 = '".$objeto->Apellido1."', Apellido2='".$objeto->Apellido2."' WHERE id='".$objeto->iden."' ";

        $resultadoUpdate = $conexionAbierta->query($consulta);

        if($resultadoUpdate){

            return "";

        }else{
            throw new Exception("Sucedió un error provocado por la consulta en la BD.");
        }

        cerrarConexion($conexionAbierta2);

    }catch(Exception $e){
        return $e;
    }

}

?>