<?php
require '../model/conexion.php';


 class conectar extends conexion{
     public function validarUsuario($documento,$pasword){
       echo parent::ingresoUsuario($documento,$pasword);
     }


      //actualizacion de la ficha que sera citada
     public function actualizarFicha($ficha,$instructor,$etapaP,$etapaf){
       parent::getdb();
       $instrc = $this->getdb()->query("SELECT docID from tblusuario where nombres = '$instructor' ");
       $etapaformativa = $this->getdb()->query("SELECT codigo from tbletapaformacion where nombre = '$etapaf'");
       $etapaproyecto = $this->getdb()->query("SELECT codigo from tbletapaproyecto where nombre = '$etapaP'");
      while ($row = $instrc->fetch(PDO::FETCH_ASSOC)) {
        $i = $row['docID'];
      }
      while ($row = $etapaformativa->fetch(PDO::FETCH_ASSOC)) {
        $eta = $row['codigo'];
      }
      while ($row = $etapaproyecto->fetch(PDO::FETCH_ASSOC)) {
        $etap = $row['codigo'];
      }
       $sql = $this->getdb()->query("UPDATE tblficha
       set instructorLider = $i,
       etapaFormacion = $eta,
       etapaProyecto = $etap
       where nroficha = '$ficha'");
     }



     //ingreso de reporte
     public function ingresarReporte($justificacion,$instructorReporte,$evidencia,$normasReglamentarias,$coordinador,$tipofalta,$tipoCalificcion,$sugerencia){
      parent::getdb();
      $sql = $this->getdb()->query("INSERT INTO tblreporte value(null,current_date() ,' $justificacion ',$instructorReporte,'$evidencia ',' $normasReglamentarias',$coordinador,'$tipofalta',' $tipoCalificcion',$sugerencia)");
      // $sql->execute([]);
     }

     //ingreso de aprendices
     public function IngresarAprendices($documentoficha){
      parent::getdb();
      $sql = $this->getdb()->query("SELECT * from tblreporte
      order by consecutivo desc
      limit 1 ");
      while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {

        $insertarAprendices = $this->getdb()->prepare("INSERT INTO tblaprendicesreportados value(null,:conse,:documentoaprendiz)");
        $insertarAprendices->execute(["conse" =>$row['consecutivo'],"documentoaprendiz" =>$documentoficha]);
      }

     }


     public function mostrarPerfil($documento){
      parent::getdb();
      $sql = $this->getdb()->prepare("SELECT u.nombres, u.apellidos,u.correoCorporativo,u.telefonoMovil,a.clave from tblusuario as u inner join tblacceso as a on u.docID = a.docIDUsuario where u.docID =  :documento");
      $sql->execute(["documento"=>$documento]);
      return $sql;
    }

    public function modificarPerfil($documento,$nombre,$Apellido,$Correo,$Celular,$password){
      parent::getdb();
      $sql = $this->getdb()->prepare("UPDATE tblusuario set nombres = ?,apellidos = ?, correoCorporativo = ?, telefonoMovil = ? WHERE docID = ?");
      $sql->execute([$nombre,$Apellido,$Correo,$Celular,$documento]);

      $sql = $this->getdb()->prepare("UPDATE tblacceso set clave = ? WHERE docIDUsuario = ?");
      $sql->execute([$password,$documento]);
    }
 }


?>