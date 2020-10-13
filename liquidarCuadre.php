<?php
include("consultaid.php");
?>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-4">
            <form method="post" action="liquidar.php">
                <input type="text" value="<?php echo $nombre ?>" class="d-none" name="empleado">
                <input type="text" value="<?php echo $total ?>" class="d-none" name="valor">
                <input type="text" value="<?php echo $totalRecibido ?>" class="d-none" name="entregado">
                <input type="text" value="<?php echo $idNueva ?>" class="d-none" name="id">
                <button type="submit" class="btn btn-primary btn btn-block btn-lg m-3" name="liquidar">Liquidar el cuadre</button>
            </form>
        </div>
    </div>
</div>