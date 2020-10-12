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
            </tr>
        <?php
            $totalRecibido = $totalRecibido + $row['valor'];
        }
        ?>
    </tbody>
</table>