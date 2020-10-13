<?php
include("db.php");
include("consultaid.php");
    if(isset($_POST['sumar'])){
        $empleado = $_POST['empleado'];
        $cliente = $_POST['cliente'];
        $valor = $_POST['valor'];
        $id = $_POST['id'];
        $query = "INSERT INTO facturas (cliente, valor, empleado, idCuadre) values ('$cliente', '$valor', '$empleado', '$id')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die('tarea fallo');
        }
        $_SESSION['mensaje'] = "creado con exito";
        $_SESSION['color'] = "success";
        header("Location: $empleado.php");
    }
?>