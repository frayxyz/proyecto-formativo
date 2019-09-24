<?php
class windo {
    function enviar($numero){
        switch ($numero) {
            case 0:
                require "../views/citacion-comite.php";
                break;
            case 1:
                require "../views/citar-aprendices.php";
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