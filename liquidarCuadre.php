<?php 
include("consultaid.php");
?>
<form method="post" action="liquidar.php">
    <input type="text" value="<?php echo $nombre ?>" class="d-none">
    <input type="text" value="<?php echo $total ?>" class="d-none">
    <input type="text" value="<?php echo $totalRecibido ?>" class="d-none">
    <input type="text" value="<?php echo $idNueva ?>" class="d-none">
    <button type="submit" class="btn btn-primary btn">Liquidar el cuadre</button>
</form>