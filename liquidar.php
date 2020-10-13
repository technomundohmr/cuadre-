<?php
    include("db.php");
        if(isset($_POST['liquidar'])){
            $empleado = $_POST['empleado'];
            $valor = $_POST['valor'];
            $entregado = $_POST['entregado'];
            $diferencia = $_POST['entregado'] - $_POST['valor'];
            $id = $_POST['id'];
            $query = "INSERT INTO cuadres (empleado, valor, entregado, diferencia, id) values ('$empleado', '$valor', '$entregado', '$diferencia', '$id' )";
            $result = mysqli_query($conn, $query);
            if(!$result){
                die('tarea fallo');
            }
            $_SESSION['mensaje'] = "creado con exito";
            $_SESSION['color'] = "success";
            header("Location: $empleado.php");
        }
?>