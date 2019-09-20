<?php require "../libs/conectarDatosPerfil.php";
$mostrarPerfil = new conectar();
$datos = $mostrarPerfil->mostrarPerfil($_SESSION['documento']);

while ($row = $datos->fetch(PDO::FETCH_ASSOC)):
?>
    <div class="style-float">
        <div class="text-center">
            <h2>Configuraciones de perfil</h2>
            <div class="container px-5">
                <form method="post" action="libs/configuracionPerfil.php">
                    <div class="px-5">
                        <label class="sr-only" for="nombre">Nombre:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-clipboard-list"></i></div>
                            </div>
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre instructor" value="<?=$row['nombres']?>">
                        </div>
                    </div>
                    <!-- apellido del usuario -->
                    <div class="px-5">
                        <label class="sr-only" for="apellido">Apellido:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-clipboard-list"></i></div>
                            </div>
                            <input type="text" name="Apellido" class="form-control" id="apellido" placeholder="Apellidos" value="<?=$row['apellidos']?>">
                        </div>
                    </div>
                    <!-- correo del instructor -->
                    <div class="px-5">
                        <label class="sr-only" for="correo">Correo:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            </div>
                            <input type="email" name="Correo" class="form-control" id="correo" placeholder="Correo" value="<?=$row['correoCorporativo']?>">
                        </div>
                    </div>

                    <div class="px-5">
                        <label class="sr-only" for="celular">Celular:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-phone-alt"></i></div>
                            </div>
                            <input type="text"name="Celular" class="form-control" id="celular" placeholder="Celular"  value="<?=$row['telefonoMovil']?>">
                        </div>
                    </div>

                    <div class="px-5">
                        <label class="sr-only" for="password">Contraseña:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                            </div>
                            <input type="password"name="password" class="form-control" id="password" placeholder="Nueva Contraseña" size="10" maxlength="10" value="<?=$row['clave']?>">
                        </div>
                    </div>

                   

                    <button type="submit" class="btn btn-success w-30 ">Guardar cambios</button>

                </form>
            </div>
        </div>
    </div>


<?php

endwhile;
?>
