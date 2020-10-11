<?php
include("db.php");
    if(isset($_POST['sumar'])){
        $empleado = $_POST['empleado'];
        $cliente = $_POST['cliente'];
        $valor = $_POST['valor'];
        $query = "INSERT INTO facturas (cliente, valor, empleado) values ('$cliente', '$valor', '$empleado')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die('tarea fallo');
        }
        $_SESSION['mensaje'] = "creado con exito";
        $_SESSION['color'] = "success";
        header("Location: $empleado.php");
    }
?>