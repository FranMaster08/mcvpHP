<?php

    include '../model/arrayusuarios.php';
    $nombre =$_POST['nombre'];
    $apellido =$_POST['apellido'];
    $direccion =$_POST['direccion'];
    
    array_push($arrayuser,$nombre);

    echo json_encode($arrayuser);

?>