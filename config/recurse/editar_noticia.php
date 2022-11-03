
<?php 
$id_edtiar_noticia= $_GET['editar'];
$consulta_cambiar = $conexion->prepare(" SELECT * FROM noticia WHERE  id='$id_edtiar_noticia' " );
$consulta_cambiar ->execute();
$datos = $consulta_cambiar->fecth(PDO::FETCH_ASSOC);

$descripcion_noticia = $datos['descripcion'];
$imagen_noticia = $datos['imagen'];

?>


<div class="editar-noticias">
    <div>
        <form action="./recurse/confirmareditar.php" method="post" enctype="multipart/form-data">
            <h2>Editar </h2>
            
                <div class="row-form"> 
                    <label for="">Descripcion :</label>
                    <input class="descripcion" type="text" name="descripcion" value="<?php echo $descripcion_noticia ?>">
                </div>
                <div>
                    <input type="text" name="id" readonly id="" value="<?php echo $id_edtiar_noticia; ?>">
                </div>
                <div  class="row-form">
                    <label for="">Imagen :</label>
                    <img style="width: 100px;" src="../img/noticias/<?php echo $imagen_noticia; ?>" alt="">
                    <input type="file" name="imagen" id="">
                </div>
                <div>
                    <input type="submit" value="Confirmar" name="editar">
                    <input type="submit" value="Cancelar" name="cancelar">
                </div>
                
        </form>
    </div>
</div>

