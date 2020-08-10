<?php
include("../home/db.php");
$IdProducto = '';
$NombreProducto= '';
$CodigoProducto= '';
$Precio= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM producto WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $NombreProducto = $row['NombreProducto'];
    $CodigoProducto = $row['CodigoProducto'];
    $Precio = $row['Precio'];
  }
}

if (isset($_POST['update'])) {
  $NombreProducto= $_POST['NombreProducto'];
  $CodigoProducto= $_POST['CodigoProducto'];
  $Precio = $_POST['Precio'];

  $query = "UPDATE producto set NombreProducto = '$NombreProducto', CodigoProducto = '$CodigoProducto', Precio = '$Precio' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Editado Correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: inventario.php');
}

?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar producto</title>

  <link rel="icon" href="../img/logo4.ico">
  <link rel="stylesheet" href="../css/diseño.css" />
</head>

     <?php
       include '../home/scripts3.php';
       include '../home/menu3.php';
       include '../home/modals.php';
       include '../home/font.php';
     ?>

<br><br><br><br><br><br>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
            <input name="NombreProducto" type="text" class="form-control" value="<?php echo $NombreProducto; ?>" placeholder="Editar nombre producto"></div>
            <div class="form-group">
          <input name="CodigoProducto" type="text" class="form-control" value="<?php echo $CodigoProducto; ?>" placeholder="Editar código"></div>
          <div class="form-group">
              <input name="Precio" type="text" class="form-control" value="<?php echo $Precio; ?>" placeholder="Editar precio"></div>
        </div>
          <input type="submit" name="update" class="btn btn-success btn-block" value="Editar" id="Editar">
      </form>
      </div>
    </div>
  </div>
</div>

<?php
    include '../home/footer.php';
?>
