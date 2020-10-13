<?php
include('db.php');
if (isset($_POST['eliminar'])) {
    $empleado = $_POST['empleado'];
    $id = $_POST['id'];
    $query = "DELETE FROM recibido WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('tarea fallo');
    }
    header("Location: $empleado.php");
}
