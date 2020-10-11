<?php
include("db.php");
$consulta = "SELECT * FROM facturas WHERE empleado = '$nombre'";
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
                        </tr>
                    <?php
                    $total = $total + $row['valor'];
                    }
                    ?>
                    <tr>
                        <td><h1><?php echo $total ?></h1></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>