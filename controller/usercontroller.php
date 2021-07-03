<?php 

    class UserController {
        public function __construct(){

        }

        public function RenderCrud(){
           echo <<<documento
                <main>
                <section>
                    <div class="container">
                            <div class="insertaruser">
                                <div>
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" id="Nombre">
                                </div>
                                <div>
                                    <label for="apellido">Apellido</label>
                                    <input type="text" name="apellido" id="Apellido">
                                </div>
                                <div>
                                    <label for="direccion">Direccion</label>
                                    <input type="text" name="direccion" id="direccion">
                                </div>
                                <div>
                                    <input type="submit" name="Enviar" id="Enviar">
                                </div>
                            </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="tablausuario">
                            <table>
                                <thead>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Direccion</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </section>
                </main>
             <script src='../views/js/main.js'></script>
           documento;
        }

    }

?>