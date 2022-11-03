<?php
include("../bd/bd.php");

if(isset($_POST['editar'])){
    $id=$_REQUEST['id'];
    $tabla = $_REQUEST['tabla'];
   $descripcion_actu = $_REQUEST['descripcion'];
   $imagen_actu = $_FILES['imagen']['name'];
   $tmpimagen = $_FILES['imagen']['tmp_name'];
  // move_uploaded_file($_FILES['imagen']['tmp_name'],"../../img/header/".$imagen_actu);

    //UPDATE `inicio` SET `descripcion` = 'a ', `imagen` = 'awd' WHERE `inicio`.`id` = 1;
    $actualizar = $conexion->prepare("UPDATE $tabla SET descripcion =:descripcion WHERE id='$id'");
    $actualizar->bindParam("descripcion", $descripcion_actu );
    $actualizar->execute();
    if($tmpimagen!=""){
        move_uploaded_file($_FILES['imagen']['tmp_name'],"../../img/header/".$imagen_actu);

        $actualizar = $conexion->prepare("SELECT imagen FROM $tabla WHERE id='$id'");
        $actualizar->execute();
        $buscar_foto = $actualizar->fetch(PDO::FETCH_LAZY);
        if(isset($buscar_foto['imagen'])){
            if(file_exists("../../img/header/".$buscar_foto['imagen'])){
                unlink("../../img/header/".$buscar_foto['imagen']);
            }
        }


        $actualizar = $conexion->prepare("UPDATE $tabla SET  `imagen`=:imagen WHERE id='$id'");
        $actualizar->bindParam("imagen", $imagen_actu);
        $actualizar->execute();
    
    }
   

   

 
    header("location: ../inicio.php");
  
    
  
  
    
} 
?>
