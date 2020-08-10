<?php

include("../home/db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM producto WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Eliminado Correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: inventario.php');
}

?>
