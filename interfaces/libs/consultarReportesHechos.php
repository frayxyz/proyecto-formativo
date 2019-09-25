<?php 
  //require "../controllers/conectar.php";
  //lo de abajo es temporal, ya que no entendia el PDO
  $con=mysqli_connect("localhost","root","","proyecto_formativo");
  mysqli_set_charset($con,"utf8");  
  error_reporting(E_ALL ^ E_NOTICE);
   //esta es la consulta para la tabla inicial de reportes a comite en coordinador
  $consulta="SELECT af.numFicha,p.nombre,r.fecha,r.consecutivo
  FROM tblreporte AS r INNER JOIN tblaprendicesreportados AS ar	
  ON ar.consReporte=r.consecutivo 
  INNER JOIN tblaprendicesficha as af ON af.docIDAprendiz=ar.docIDAprendiz
  INNER JOIN tblficha as f ON f.nroFicha=af.numFicha
  INNER JOIN tblprograma as p ON p.codigo=f.programa
  GROUP BY r.consecutivo";

  $result=mysqli_query($con,$consulta);
  if ($result){
      
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";    
        echo "<td>".$row['consecutivo']."</td>";
        echo "<td>".$row['numFicha']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['fecha']."</td>";
         echo "</tr>";
    }

    }else{ 
        echo "hay errores";
    }

  ?>
 

