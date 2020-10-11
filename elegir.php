<?php
include("db.php");
$consulta = "SELECT * FROM empleados";
$result = mysqli_query($conn, $consulta);
?>
<div class="container">
    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="col-md-6 p-5">
                <a class="card p-5 text-center" href="<?php echo $row['nombre']; ?>.php">
                    <h1 class="display-1"><?php echo $row['nombre']; ?></h1>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
</div>