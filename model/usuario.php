
<?php 
    class UsuarioModel{
        $Id='';
        $Nombre='';
        $Apellido='';
        $Direccion='';

        public function __construct(){
            $this->Id='';
            $this->Nombre='';
            $this->Apellido='';
            $this->Direccion='';
        }
    
        public function mapUser($id,$nombre,$apellido,$direccion){
            $Usuario=new UsuarioModel();
            $Usuario->Id=$id;
            $Usuario->Nombre=$nombre;
            $Usuario->Apellido=$apellido;
            $Usuario->Direccion=$direccion;
            return $Usuario->nombre;
        }
    
    }

?>
