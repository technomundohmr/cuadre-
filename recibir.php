<?php
include("db.php");
include("consultaid.php");
if(isset($_POST['recibir'])){
    $empleado = $_POST['empleado'];
    $concepto = $_POST['concepto'];
    $valor = $_POST['valor'];
    $id = $_POST['id'];
    $query = "INSERT INTO recibido (concepto, valor, empleado, idCuadre) values ('$concepto', '$valor', '$empleado', '$id')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('tarea fallo');
    }
    $_SESSION['mensaje'] = "sumado con éxito";
    $_SESSION['color'] = "warning";
    header("Location: $empleado.php");
}
?>