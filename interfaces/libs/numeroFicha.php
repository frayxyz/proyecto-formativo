<?php
require "../controllers/peticionFicha.php";
$ficha = $_POST["numeroficha"];
$base = new DB();
$base->traerinforme($ficha);
?>