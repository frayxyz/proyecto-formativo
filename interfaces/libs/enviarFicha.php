<?php 
    session_start();
if (!empty($_POST['justificar']) && !empty($_POST['evidencia']) && !empty($_POST['ficha']) && !empty($_POST['sugerencia']) && !empty($_POST['aprendices']) ) {
    # code...
    require "../controllers/conectar.php";

    $IngresoDeDatos = new conectar();
    //datos de la ficha en caso de ser modificados
    $ficha =$_POST['ficha'];
    $instructor = $_POST['instructor'];
    $etapaproyecto = $_POST['etapaproyecto'];
    $etapaformativa = $_POST['etapaformacion'];

    $IngresoDeDatos->actualizarFicha($ficha,$instructor,$etapaproyecto,$etapaformativa);


    //ingreso del reporte se insertaran datos en la tabla de los reportes
    $justificacion = $_POST['justificar'];
    $instructorReporte = $_SESSION['documento'];
    $evidencia = $_POST['evidencia'];
    $normasReglamentarias = $_POST['normasReglamentarias'];
    $coordinador =  $_SESSION['documentoCoordinador'];
    $tipofalta = $_POST['tipofalta'];
    $tipoCalificcion = $_POST['tipocalificacion'];
    $sugerencia = $_POST['sugerencia'];

    $IngresoDeDatos->ingresarReporte($justificacion,$instructorReporte,$evidencia,$normasReglamentarias,$coordinador,$tipofalta,$tipoCalificcion,$sugerencia);


    //aprendices que seran citados
    $aprendices = $_POST['aprendices'];
    foreach ($aprendices as $key => $value) {
        $IngresoDeDatos->IngresarAprendices($value);
    }


    header('location:../instructor.php');
}else{
    $_SESSION['mensaje2'] = "error no se pueden datos vacio";
    header('location:../instructor.php');

}
// echo $ficha ;
// echo "<br>";
// echo $instructor;
// echo "<br>";
// echo $etapaproyecto ;
// echo "<br>";
// echo $etapaformativa;
// echo "<br>";
// echo $justificacion;
// echo "<br>";
// echo $evidencia;
// echo "<br>";
// echo $tipofalta;
// echo "<br>";
// echo $coordinador;
// echo "<br>";
// echo $tipoCalificcion;
// echo "<br>";
// echo $sugerencia;
// echo "<br>";
// echo $normasReglamentarias;
// echo "<br>";
// echo $instructorReporte;
// echo "<br>----------------------------------------- <br>$valor_Fecha_Reporte";