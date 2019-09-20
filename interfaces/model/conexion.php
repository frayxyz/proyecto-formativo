<?php 

class Conexion{
    private $host;
    private $user;
    private $pass;
    private $db; 

    public function __construct(){
        $this->host = 'localhost';
        $this->user  = 'root';
        $this->pass  = '';
        $this->db = 'proyectoformativo';
    }
    
    public function getdb(){
        try {
            $opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => FALSE];
            $conexion = new  PDO("mysql:host=$this->host; dbname=$this->db",$this->user,$this->pass,$opciones);
            $conexion->exec("set names utf8");
        } catch (PDOException $e) {
            echo'error conexion:' . $e->getMessage();
        }
        return $conexion;
    }

    //para la validacion de los usuarios 
    public function ingresoUsuario($documento, $pasword){
        self::getdb();
        $sql = $this->getdb()->prepare("SELECT p.nombre, a.docIDUsuario,a.clave,u.nombres from tblacceso as a inner join tblusuario as u on  u.docID = a.docIDUsuario inner join tblperfil as p on u.perfil = p.codigo where docIDUsuario = :usuario and clave = :clave");
        $sql->execute(['usuario' => $documento,'clave' => $pasword]);
        $valor = $sql->rowCount();
        echo $valor . "<br>";   
        if ( $valor > 0) {
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                if($row['nombre'] != "Aprendiz"){
                    //el perfil es para validar los permisos de usuario
                    $_SESSION['perfil'] = $row['nombre'];
                    $_SESSION['documento'] =$row['docIDUsuario'];
                    $_SESSION['password'] =$row['clave'];
                    //nombreU para mostrar en elmodulo el nombre del usuario
                    $_SESSION['nombreU'] = $row['nombres'];
                    header('location:../'.$_SESSION['perfil'].'.php');
                }
            }
        }else{
            $_SESSION['mensaje'] = "error no se encontro el usuario";
            header('location:../../');
        }
    }
    
}

?>