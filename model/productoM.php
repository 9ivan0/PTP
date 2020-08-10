<?php

   require_once ('conexion.php');

   class producto{
     protected $IdProducto;
     protected $NombreProducto;
     protected $CodigoProducto;
     protected $Precio;
     protected $img;
     protected $imgurl;

     protected function InsertProducto(){

       $ic = new Conexion();
       $sql = "INSERT INTO producto (NombreProducto, CodigoProducto, Precio, img) VALUES (?,?,?,?)";
       $insertar = $ic->db->prepare($sql);
       $insertar->bindParam(1,$this->NombreProducto);
       $insertar->bindParam(2,$this->CodigoProducto);
       $insertar->bindParam(3,$this->Precio);
       $insertar->bindParam(4,$this->img);
       $insertar->execute();
     }
   }

?>
