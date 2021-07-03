<?php 
    include './controller/usercontroller.php';
    $controller=new UserController();
    $controller->RenderCrud();

?>