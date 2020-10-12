<?php
include("db.php");
$queryId = "SELECT * FROM cuadres WHERE empleado = '$nombre' ORDER BY id DESC LIMIT 1";
$cons = mysqli_query($conn, $queryId);
while ($row = mysqli_fetch_array($cons)){
    $idNueva = $row['id'] + 1 ;
}
if(!isset($idNueva)){
    $idNueva = 1;
}
