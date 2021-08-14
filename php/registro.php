<?php

    //aca pido los datos de array
    include './model/persona.php';
    include './array.php';

    //llenamos las propiedades del objeto con lo que viene del cliente
    
    $datos = new Cliente(
        $_POST['Nombre'],
        $_POST['Apellido'],
        $_POST['Direccion']
    );
   
       
    //llenamos el array
    array_push($personasd,$datos);

       //devolvemos el array
      echo json_encode($personasd);
    

?>