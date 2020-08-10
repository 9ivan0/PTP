<?php

   require_once '../model/productoM.php';

   class ProductoC extends producto{

     public function ViewInsert(){
       require_once '../view/modulos/m/inventario.php';
     }
     public function SaveInfoForModel($NombreProducto, $CodigoProducto, $Precio, $img, $imgurl){

       $this ->NombreProducto = $NombreProducto;
       $this ->CodigoProducto = $CodigoProducto;
       $this ->Precio = $Precio;
       $this ->img = $img;
       $this ->imgurl = $imgurl;
       $this ->InsertProducto();
       $this ->Redirect();
     }

     public function Redirect(){
       header("location: ../view/modulos/m/inventario.php");
     }

   }

   if(isset($GET['action']) && $_GET['action']=='insert'){
     $instanciaproducto = new productoC();
     $instanciaproducto ->ViewInsert();
   }

   if(isset($_POST['action']) && $_POST['action']=='insert'){
     $instanciaproducto = new productoC();
     $img = $_FILES['img']['name'];
     $imgtemporal = $_FILES['img']['tmp_name'];
     $imgurl = "../view/modulos/m/images/" . $img;
     copy($imgtemporal, $imgurl);
     $instanciaproducto -> SaveInfoForModel(
       $_POST['NombreProducto'],
       $_POST['CodigoProducto'],
       $_POST['Precio'],
       $img,
       $imgurl);
   }

?>
