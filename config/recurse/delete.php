<?php
include("../bd/bd.php");
if(isset($_POST['confirmar'])){
        $borrarid = $_POST['idnoticia'];

        $consulta = $conexion->prepare("SELECT imagen FROM noticia WHERE id='$borrarid'");
        $consulta->execute();
        $borrar_foto = $consulta->fetch(PDO::FETCH_LAZY);
        if(isset($borrar_foto['imagen'])){
        if(file_exists("../../img/noticias/".$borrar_foto['imagen'])){
        unlink("../../img/noticias/".$borrar_foto['imagen']);
        }
        }

        $consulta = $conexion->prepare("DELETE FROM `noticia` WHERE `noticia`.`id` = '$borrarid' ");
        $consulta ->execute();
        header("location: ../noticias.php");
}

if(isset($_POST['cancelar'])){
    header("location: ../noticias.php");
}

?>
