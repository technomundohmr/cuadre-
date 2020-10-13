<?php
$consulta = "SELECT * FROM recibido WHERE empleado = '$nombre' and idCuadre = '$idNueva'";
$result = mysqli_query($conn, $consulta);
?>
<table class="table table-light">
    <h4>Recibido</h4>
    <thead class="table-success text-center">
        <tr>
            <th>Cliente</th>
            <th>Valor</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php
        $totalRecibido = 0;
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['concepto'] ?></td>
                <td>$ <?php echo $row['valor'] ?></td>
                <td>
                    <form action="eliminarRecepcion.php" method="post">
                        <input class="d-none" type="text" value="<?php echo $row['id'] ?>" name="id">
                        <input class="d-none" type="text" value="<?php echo $nombre ?>" name="empleado">
                        <button type="submit" class="btn btn-danger" name="eliminar">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php
            $totalRecibido = $totalRecibido + $row['valor'];
        }
        ?>
    </tbody>
</table>