<?php

include('../home/db.php');

if (isset($_POST['save_task'])) {
  $NombreProducto = $_POST['NombreProducto'];
  $CodigoProducto = $_POST['CodigoProducto'];
  $Precio = $_POST['Precio'];
  $query = 'INSERT INTO producto(NombreProducto, CodigoProducto, Precio) values("'.$NombreProducto.'", "'.$CodigoProducto.'", "'.$Precio.'")';
  $result = mysqli_query($conn, $query);
    [0].reset();
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: inventario.php');


}

?>
