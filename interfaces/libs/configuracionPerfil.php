<?php
require "../libs/conectarDatosPerfil.php";
session_start();
$modificar = new conectar();

$nombre = $_POST['nombre'];
$Apellido = $_POST['Apellido'];
$Correo = $_POST['Correo'];
$Celular = $_POST['Celular'];
$password = $_POST['password'];
$documento = $_SESSION['documento'];

$modificar->modificarPerfil($documento,$nombre,$Apellido,$Correo,$Celular,$password);
$_SESSION['nombreU'] = $nombre;
//echo "$nombre $Apellido $Correo $Celular $password $documento";
header('location:../'.$_SESSION['perfil'].'.php');