<?php 
class window {
    function instructor($numero){
        switch ($numero) {
            case 0:
                require "../views/instructor/citacion-comite.php";
                break;
            case 1:
                require "../views/configuraciones.php";
                break;
            case 3:
                require "../libs/salir.php";
                break;
            default:
                echo "error fatal";
                break;
        }
    }

    function bienestar($numero){
        switch ($numero) {
            case 0:
                require "../views/bienestar/acta-comite.php";
                break;
            case 1:
                require "../views/bienestar/citar-aprendices.php";
                break;
            case 2:
                require "../views/bienestar/citar-aprendices.php";
                break;
            case 3:
                require "../views/configuraciones.php";
                break;
            case 4:
                require "../libs/salir.php";
                break;
            default:
                echo "error fatal";
                break;
        }
    }

    function coordinador($numero){
        switch ($numero) {
            case 0:
                require "../views/instructor/citacion-comite.php";
                break;
            case 1:
                require "../views/instructor/citar-aprendices.php";
                break;
            case 2:
                require "../views/configuraciones.php";
                break;
            case 3:
                require "../libs/salir.php";
                break;
            default:
                echo "error fatal";
                break;
        }
    }

}

?>