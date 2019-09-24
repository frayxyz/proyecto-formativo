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
        }
    }

    function bienestar($numero){
        switch ($numero) {
            case 0:
                require "../views/bienestar/acta-comite.php";
                break;
            case 1:
                require "../views/vistas-globales/reportes-generales/consulta1.php";
                break;
            case 2:
                require "../views/vistas-globales/reportes-generales/consulta2.php";
                break;
            case 3:
                require "../views/vistas-globales/reportes-generales/consulta3.php";
                break;
            case 4:
                require "../views/vistas-globales/reportes-generales/consulta4.php";
                break;
            case 5:
                require "../views/vistas-globales/reportes-generales/consulta5.php";
                break;
            case 6:
                require "../views/vistas-globales/reportes-generales/consulta6.php";
                break;
            case 7:
                require "../views/vistas-globales/reportes-generales/consulta7.php";
                break;
            case 8:
                require "../views/vistas-globales/reportes-generales/consulta8.php";
                break;
            case 9:
                require "../views/vistas-globales/reportes-generales/consulta9.php";
                break;
            case 10:
                require "../views/vistas-globales/reportes-generales/consulta10.php";
                break;

            case 11:
                require "../views/configuraciones.php";
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
        }
    }

}
?>