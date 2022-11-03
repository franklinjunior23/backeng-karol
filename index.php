<?php include("./recurse/cabecera.php"); ?>
<!--  cabecera : --->


<?php include("./recurse/header.php"); ?>
<!--  nav : --->



<!--Conexion con la base de datos -->
<?php include("./config/bd/bd.php") ?>



<div class="header-img" style="background:url(./img/header/header.jpg) fixed center center;">
    <div class="cont-box-header">
        <div>
            <h2>Matriculas Abiertas</h2>
        </div>
        <div>
            <a href="">Matriculas 2022</a>
            <a href="">Primeros Puestos</a>
        </div>
    </div>
</div>

<section class="seccion-2">
    <div class="contenedor-responsive">
        <div>
            <div class="text-sc2">

                <?php $consultinicio = $conexion->prepare("SELECT * FROM `inicio`");
                $consultinicio->execute();
                $inicio =  $consultinicio->fetchAll(PDO::FETCH_ASSOC);


                foreach ($inicio as $box_inicio) { ?>
                    <h3>
                        <?php echo $box_inicio['descripcion']; ?>

                    </h3>
            </div>
            <div class="img-sc2">
                <img src="img/header/<?php echo $box_inicio['imagen']; ?>" alt="">
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="seccion-3">
    <div class="contenedor-responsive">
        <div>
            <div class="sc-title">
                <h2>Niveles Academicos</h2>
            </div>
            <div class="sc-contn-box">
                 <?php $consultia_nivelesacademicas = $conexion->prepare("SELECT * FROM `nivelesacademicos`");
                $consultia_nivelesacademicas->execute();
                $niveles =  $consultia_nivelesacademicas->fetchAll(PDO::FETCH_ASSOC);


                foreach ($niveles as $nivelesa) { ?>

                <div class="rel-box">
                    <img src="./img/header/<?php echo $nivelesa['imagen'] ?>" alt="">

                    <div>
                        <h3><?php echo $nivelesa['titulo'] ?></h3>
                        <span>
                            <?php echo $nivelesa['descripcion'] ?>
                        </span>
                        <a href="">Leer mas</a>
                    </div>
                </div>
                <?php } ?>
                
                </div>
            </div>
        </div>
    </div>
</section>
            <?php 
                $consulta_mes = $conexion->prepare("SELECT * FROM `mes`");
                $consulta_mes->execute();
                $mesa =  $consulta_mes->fetchAll(PDO::FETCH_ASSOC); ?>
<section class="seccion-4">
    <?php foreach ( $mesa  as  $mes) { ?>
    <div class="contenedor-responsive">
        <img src="./img/mes/<?php echo $mes['imagen'] ?>" alt="">
    </div>
    <?php } ?>
</section>

<section class="seccion-5" id="noticias">

    <div class="cb"></div>
    <div class="cb"></div>
    <div class="cb"></div>
    <div class="cb"></div>
    <div class="cb"></div>
    <div class="cb"></div>

    <div class="contenedor-responsive">
        <div>
            <div class="sc-tittle-noticia">
                <h2>Ultimas Noticias</h2>
            </div>
            <div class="sc-cont-noticia">
                <?php 
                $consultanoticia = $conexion->prepare("SELECT * FROM `noticia`");
                $consultanoticia ->execute();
                $noticias =  $consultanoticia ->fetchAll(PDO::FETCH_ASSOC);


                foreach ($noticias  as  $noticia) { ?>
                <div>
                    <img src="img/noticias/<?php echo $noticia['imagen'] ?>" alt="">
                    <span><?php echo  $noticia['fecha']; ?></span>
                    <br>
                    <a href=""><?php  echo $noticia['descripcion'] ?></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!--  pie de pagina : --->
<?php include("./recurse/pie.php"); ?>