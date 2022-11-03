<div class="confirmar-delete">
    <div>
        <form action="./recurse/delete.php" method="post">
            <h1>¿Desea Eliminar?</h1>
            <div>
                <input type="text" readonly class="input-id" name="idnoticia" hidden id="" value="<?php echo $_GET['borrar'];?>">
            </div>
            <div class="btn-cancelar">
                <input class="btn btn-danger  text-light" type="submit" value="Confirmar" name="confirmar">
                <input class="btn bg-primary text-white" type="submit" value="Cancelar" name="cancelar">
            </div>
        </form>
    </div>
</div>