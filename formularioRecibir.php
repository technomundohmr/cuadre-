<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3><strong>Total: </strong>$<?= $total ?></h3>
            <?php
            include("sumatoriaRecepcion.php")
            ?>
            <h3>Recibido Total: $<?= $totalRecibido ?></h3>
        </div>
        <div class="col-md-6">
            <h3>Recibido</h3>
            <form action="recibir.php" method="POST">
                <input type="text" name="empleado" value="<?= $nombre ?>" class="d-none">
                <div class="form-group">
                    <input class="form-control" type="text" name="concepto" value="efectivo">
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="valor">
                </div>
                <button class="btn btn-warning" type="submit" name="recibir">Recibir</button>
            </form>
        </div>
    </div>
</div>