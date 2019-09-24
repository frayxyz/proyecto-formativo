<?php 
require "../controllers/window.php";
session_start();
if(isset($_REQUEST['numero'])){

    $variable = $_REQUEST['numero'];
    $con = new control($variable);
}   
class control{
    function __construct($respuesta_de_vista){
        $control = new window();
        if ($_SESSION['perfil'] == "Instructor") {
            $control->instructor($respuesta_de_vista);
        }elseif ($_SESSION['perfil'] == "Bienestar") {
            $control->bienestar($respuesta_de_vista);
        }elseif($_SESSION['perfil'] == "Coordinador"){
            $control->coordinador($respuesta_de_vista);
        }else{
            echo "administrador";
        }
    } 

    public function salir(){
        session_start();
        session_destroy();
        session_abort();
        header('location:../../');
    }
    
}


?>