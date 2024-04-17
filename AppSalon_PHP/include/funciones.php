<?php

function obtener_servicios()
{
    //La fomra en como intentamos hacer algo y en el caso que exista
    //un error en todo el código automaticamente lanza el error
    try{

        //PARA CONSULTAR A UNA BASE DE DATOS HAY 4 PASOS Y 1 ADICIONAL 
        //1 .- Crear un archivo databse.php con el codigo para llamar a la base de datos;
        require 'database.php';
        
        
        //2. - Consulta Sql;

        $sql = "SELECT*FROM servicios LIMIT 4;";



        //3. - Realizar la consulta

        $consulta= mysqli_query($db, $sql);

        return $consulta;

        //4.- Acceder a los resultados

        echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta));
        echo"</pre>";



        //5.- Cerrar la coneccion.

        $resultado= mysqli_close($db);

        echo $resultado;


    }catch(\Throwable $th){ //\Throwable es una clase de php que nos ayud con el error

        var_dump($th);
    }
    



}


obtener_servicios();