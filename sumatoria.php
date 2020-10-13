<?php
include("db.php");
include("consultaid.php");
$consulta = "SELECT * FROM facturas WHERE empleado = '$nombre' and idCuadre = '$idNueva'";
$result = mysqli_query($conn, $consulta);
?>
<div class="container">
    <div class="row">
        <div class="table">
            <table class="table table-light">
                <thead class="table-success text-center">
                    <tr>
                        <th>Cliente</th>
                        <th>Valor</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $total = 0;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['cliente'] ?></td>
                            <td>$ <?php echo $row['valor'] ?></td>
                            <td>
                                <form action="eliminar.php" method="post">
                                    <input class="d-none" type="text" value="<?php echo $row['id'] ?>" name="id">
                                    <input class="d-none" type="text" value="<?php echo $nombre ?>" name="empleado">
                                    <button type="submit" class="btn btn-danger" name="eliminar">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                        $total = $total + $row['valor'];
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
  <?php 
  echo $idNueva
  ?>
</div>