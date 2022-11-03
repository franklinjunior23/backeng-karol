<?php
$editar = $_GET['editar'];
$tabla = $_GET['tabla'];
$consulta_editar_inicio = $conexion->prepare(" SELECT * FROM $tabla WHERE id='$editar' ");
$consulta_editar_inicio->execute();
$c_inicio = $consulta_editar_inicio->fetch(PDO::FETCH_ASSOC);

$descripcion = $c_inicio['descripcion'];
$imagen = $c_inicio['imagen'];
?>

<div class="cntn-editar" id="cntn-editar">
    <div class="box-form">
        <i class="uil uil-multiply" id="cerrar-form-editar"></i>
        <form action="./recurse/update.php" method="post" enctype="multipart/form-data" >
            <div class="cntn-form-editar">
                <div class="row-form">
                    <h1 class="text-center">Editar</h1>
                    <div>
                        <label for="">Tabla :</label>
                        <input style="color: white;" type="text" name="tabla" readonly id=""  value="<?php echo $tabla ?>" >
                    </div>
                    <div>
                        <label for="">id :</label>
                        <input style="color: white;" type="text" name="id" readonly id=""value="<?php echo $editar?>">
                    </div>

                </div>
                <div class="row-form">
                    <label for="">Descripcion</label>
                    <textarea name="descripcion" id="" cols="5" rows="10"><?php echo $descripcion; ?></textarea>
                </div>
                <div class="row-form">
                    <label for="">Imagen :  <?php echo $imagen; ?></label>

                    <img style="display: block; width: 100px; margin: auto;" src="../img/header/<?php echo $imagen; ?>" alt="">

                    <input style="border: 1px solid white; padding: 15px; border-radius: 15px;" type="file" name="imagen" id="" value="<?php echo $imagen; ?>">
                </div>
                <div class="row-form">
                    <input style="border: 1px solid white; width: 200px; margin: auto; font-size: 25px; padding: 8px 0; border-radius: 15px; color: white;" type="submit" value="Confirmar" name="editar">
                </div>
            </div>
        </form>
    </div>
</div>