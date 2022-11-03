<?php include("./recurse/cabecera.php"); ?>
<?php include("./bd/bd.php") ?>
<br><br>
<section class="cntn-descripcion">
    <div style="max-width: 500px; height: auto;">
        <img style="width: 100%; " src="../img/secciones/cat_descripcion_inicio.JPG" alt="">
    </div>
    <div style="display: flex; align-items: center; max-width: 700px;">
        <table width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $consulta_inicio = $conexion->prepare("SELECT * FROM `inicio`");
                $consulta_inicio->execute();
                $inicios = $consulta_inicio->fetchAll(PDO::FETCH_ASSOC);
                foreach ($inicios as $inicio) {
                ?>
                    <tr>
                        <td><?php echo $inicio['id']; ?></td>
                        <td><?php echo $inicio['descripcion']; ?></td>
                        <td> <img style="width: 100px;" src="../img/header/<?php echo $inicio['imagen']; ?>" alt=""></td>
                        <td>
                            <a class="btn btn-warning" href="inicio.php?editar=<?php echo $inicio['id']; ?>&tabla=inicio" class="bg-warning p-2 ">
                                <i class="uil uil-edit"></i>Editar</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php if (isset($_GET['editar'])) {
    include("./recurse/editar_form.php");
} ?>

<br>
<h2 class="text-center text-light fs-1">Niveles Academicos</h2>
<section class="cntn-niveles">

    <div>
        <img style="width: 100%;" src="../img//secciones/niveles_academicos.JPG" alt="">
    </div>
    <br>
    <div class="cntn-table">
        <table style="color: white; " width="100%">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Nivel Academico</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $consulta_niveles = $conexion->prepare("SELECT * FROM `nivelesacademicos`");
                $consulta_niveles->execute();
                $niveles_academico = $consulta_niveles->fetchAll(PDO::FETCH_ASSOC);
                foreach ($niveles_academico as $nivel) {
                ?>

                    <tr>
                        <td><?php echo $nivel['id'] ?></td>
                        <td style="text-transform: uppercase;"><?php echo $nivel['titulo'] ?></td>
                        <td style="max-width: 500px;"><?php echo $nivel['descripcion'] ?></td>
                        <td><img style="display: block; width: 100px; margin: auto;" src="../img/header/<?php echo $nivel['imagen'] ?>" alt=""></td>
                        <td>
                            <center>
                                <a class="btn btn-warning" href="inicio.php?editar=<?php echo $inicio['id']; ?>&tabla=nivelesacademicos" class="bg-warning p-2 ">
                                    <i class="uil uil-edit"></i>Editar</a>
                            </center>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

</section>
<br>
<br>
<h2 class="text-center text-light fs-1">Imagen - Mes</h2>
<section class="cntn-mes">
    <div class="cntn-imagen">
        <img  src="../img/header/Mes-octubre.jpg" alt="">

    </div>
    <div class="cntn-table-mes">
        <table style="color: white; " width="100%">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $consulta_mes = $conexion->prepare("SELECT * FROM `mes`");
                $consulta_mes->execute();
                $mes_foto = $consulta_mes->fetchAll(PDO::FETCH_ASSOC);
                foreach ($mes_foto as $mes) {
                ?>
                    <tr>
                        <td><?php echo $mes['id'] ?></td>
                        <td>
                            <img style=" display: block; width:250px; margin: auto;" src="../img/header/<?php echo $mes['imagen'] ?>" alt="">
                        </td>
                        <td>
                            <center>
                                <a class="btn btn-warning" href="inicio.php?editar=<?php echo $inicio['id']; ?>&tabla=mes" class="bg-warning p-2 ">
                                    <i class="uil uil-edit"></i>Editar</a>
                            </center>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

</section>


<?php include("./recurse/pie.php")  ?>