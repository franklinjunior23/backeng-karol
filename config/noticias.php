<?php include("./recurse/cabecera.php"); ?>
<?php include("./bd/bd.php") ?>


<div class="cntn-form-agregar" id="contenedor-form">
    <div>
         <button onclick="cerrarform_añadir()"><i class="uil uil-multiply" id="xlose-formañadir"></i></button>
        <form action="" method="post" enctype="multipart/form-data" >
            <h2>Añadir Noticia</h2>
            <div class="row-editar-div">
                <label for="img">Coloque la imagen</label>
                <input type="file" name="imagen" id="img">
            </div>
            <div  class="row-editar-div">
                <label for="fecha">Coloque la descripcion</label>
                <input style="height: 100px;" type="text" name="descripcion" id="fecha">
            </div>
            <div>
                <input style= "margin: 15px 0; background: none; 
                border-radius: 10px; font-size: 20px; padding: 5px 15px; display: block; width: 150px; margin: auto;" type="submit" value="Confirmar" name="añadir">
            </div>
        </form>
    </div>

</div>

<?php
if (isset($_POST['añadir'])){
    $imagen = $_FILES['imagen']['name'];
    $descripcion = $_POST['descripcion'];
    $tmp_imagen = $_FILES['imagen']['tmp_name'];
    if($tmp_imagen!=""){
        move_uploaded_file($_FILES['imagen']['tmp_name'],"../img/noticias/". $imagen);
    }
    date_default_timezone_set("America/Lima");
    $mes= date('M');
    $dia = date('d');
    $año = date('Y');
    $fecha= "$mes $dia, $año";
    $añadir = $conexion->prepare("INSERT INTO noticia (id ,  imagen , fecha , descripcion) VALUES (null , '$imagen', '$fecha','$descripcion')");
    $añadir ->execute();
    header("location: noticias.php");

}
//INSERT INTO `noticia` (`id`, `imagen`, `fecha`, `descripcion`) VALUES (NULL, 'matriculas2023.jpg', 'oct 11, 2022', 'Matriculas abiertas; click para mas informacion')?>
<h2 class="text-center text-alignt text-light fs-1">Noticias</h2>
<section class="sec-noticias">
    <button class="btn btn-danger  text-light" onclick="abrirform()">Agregar mas</button>
    <div class="cntn-box-noticias-adm">
                <?php
                $consulta_noticia = $conexion->prepare("SELECT * FROM `noticia`");
                $consulta_noticia->execute();
                $noticias = $consulta_noticia->fetchAll(PDO::FETCH_ASSOC);
                foreach ($noticias as $noticia) {
                ?>

        <div class="box-img-nt">
            <img src="../img/noticias/<?php echo $noticia['imagen'] ?>" alt="">
            <span><?php echo $noticia['fecha'] ?></span>
            <p style="text-transform: capitalize;" > <?php echo $noticia['descripcion'] ?></p>
            <div>
                <a class="btn bg-success text-white" href="noticias.php?editar=<?php echo $noticia['id'] ?>">Editar</a>
                <a class="btn btn-danger  text-light" href="noticias.php?borrar=<?php echo $noticia['id'] ?>">Eliminar</a>
            </div>
        </div>
        <?php } ?>
           
    </div>

</section>

<?php 
if(isset($_GET['borrar'])){
    include("./recurse/confirmar_delete.php");
}
?><?php 
if(isset($_GET['editar'])){
    include("./recurse/editar_noticia.php");
}
?>


<?php include("./recurse/pie.php")  ?>