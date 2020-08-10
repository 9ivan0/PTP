<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="stylesheet" href="../css/diseño.css" />

  <link rel="icon" href="../img/logo4.ico" />

  <title>Inventario</title>

  </head>
  <body>
      <?php
         include '../home/db.php';
         include '../home/font.php';
         include '../home/scripts3.php';
         include '../home/menu3.php';
         include '../home/modals.php';
      ?>
      <br><br><br>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">

      <?php if (isset($_SESSION['message'])) { ?>
      <div  style="z-index: 1000; margin-left: 100%; margin-right: -115%;" class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body" style="background: #fff; opacity: 0.9; z-index: 1000; margin-left: 100%; margin-right: -115%;">
        <form action="save_task.php" method="POST" id="save">
          <div class="form-group">
            <input type="text" name="NombreProducto" class="form-control" placeholder="&nbsp;Ingresa Nombre" id="task_form" required>
          </div>
           <div class="form-group">
            <input type="text" name="CodigoProducto" class="form-control" placeholder="&nbsp;Ingresa còdigo" id="task_form" required>
          </div>
          <div class="form-group">
            <input type="text" name="Precio" class="form-control" placeholder="&nbsp;Ingresa precio" id="task_form" required>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Crear" id="crear">
        </form>
      </div>
    </div>
    <div class="col-md-8" style=" margin-left: -30%;  margin-right: 30%;padding-bottom: 700px;">
      <table class="table table-bordered" style="background: #fff; opacity: 0.9; position: absolute; top: 420px; left: 30px; ">
        <thead>
          <tr>
            <th>IdProducto</th>
            <th>NombreProducto</th>
            <th>CodigoProducto</th>
            <th>Precio</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM producto";
          $result_tasks = mysqli_query($conn, $query);

          while($row = mysqli_fetch_assoc($result_tasks))  {?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['NombreProducto']; ?></td>
            <td><?php echo $row['CodigoProducto']; ?></td>
            <td><?php echo $row['Precio']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
     <?php
        include '../home/footer.php';
     ?>

     <style>
        body{
          background-image: url('../img/ropa-fondo-2.jpg');
        }

         #task_form::placeholder {
           color: #8C8C8C;
           font-weight: 400;
         }
     </style>
</body>
</html>
