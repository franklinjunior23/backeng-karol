<?php include("./recurse/cabecera.php"); ?>
<!--  cabecera : --->


<?php include("./recurse/header.php"); ?>
<!--  nav : --->


<section class="contn-bienv">
    <div class="contenedor-responsive">
        <div>
            <div class="links-contn-bn">
                <ul>
                    <li ><a href="bienvenido.php"><span></span>Bienvenido</a></li>
                    <li id="active-bn"><a href="palabrasdirector.php"><span></span>Palabras del Director</a></li>
                    <li><a href="misionyvision.php"><span></span>Mision y Vision</a></li>
                </ul>
            </div>
            <div class="cntn-text-bn">
                <h2>Palabras del director</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iusto mollitia laudantium fuga tempora id sed quasi repellat debitis. In commodi labore, expedita beatae alias cum pariatur distinctio corporis hic consectetur, laboriosam nobis cumque quas? At ad molestiae dolorem natus quo optio in, provident, impedit ipsam nesciunt perspiciatis maiores non aspernatur libero accusantium delectus rerum vero quod minus ratione adipisci! Assumenda aliquid, repudiandae quas hic omnis vitae odio, voluptate impedit ducimus officiis eius, quo voluptatem quisquam suscipit similique illo cum.
                </p>
                <img src="../img/header/foto-directora.jpg" style="display: block; width: 450px; margin: auto;" alt="">
            </div>
        </div>
    </div>
</section>






<!--Conexion con la base de datos -->
<?php include("./config/bd/bd.php") ?>

<?php include("./recurse/pie.php"); ?>