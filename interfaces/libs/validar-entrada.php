<?php
session_start();
//validar los campos para el ingreso del usuario
if ( (!empty($_POST['docu'])  &&  !empty($_POST['pas'])) || (!empty( $_SESSION['password']) && !empty( $_SESSION['password']))  ) {
    
    require "../controllers/conectar.php";
    $cone = new conectar();
    if (isset($_SESSION['password']) && isset($_SESSION['documento']) ) {
       $cone->validarUsuario($_SESSION['documento'],$_SESSION['password']);
    
    }else{
        $documento = $_POST['docu'];
        $pasword =  $_POST['pas'];
        $cone->validarUsuario($documento,$pasword);
    }
    
}else{
    $_SESSION['mensaje'] = "todos los campos son requeridos";
    header('location:../../');
}

/*
 select f.nroficha as 'numero de ficha',p.nombre as 'programa',n.nombre as 'nivel',m.nombre as 'municipio',f.horaInicio as 'hora inicio',f.horafin as 'hora fin',e.nombre as  'etapa de formacion ',eta.nombre as 'etapa del proyecto',i.nombres as 'instructor lider',a.nombre as 'area' from tblficha as f inner join tblprograma as p on f.programa = p.codigo
    inner join tbletapaformacion as e
    on f.etapaformacion = e.codigo
    inner join tbletapaproyecto as eta
    on f.etapaproyecto  = eta.codigo
    inner join tblusuario as i 
    on f.instructorlider = i.docID
    inner join tblarea as a
    on p.area = a.codigo
    inner join tblnivel as n
    on p.nivel = n.codigo
    inner join tblmunicipio as m
    on f.municipio  = m.codigo
 */


?>