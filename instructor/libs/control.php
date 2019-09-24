<?php
require "../controllers/window.php";
if(isset($_POST['numero'])){

    $variable = $_POST['numero'];
    $con = new control($variable);
}
class control{
    function __construct($respuesta_de_vista){
        $control = new windo();
        $control->enviar($respuesta_de_vista);
    }

    public function salir()
    {
        header('location:../../');
    }
}


?>