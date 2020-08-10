<?php
  require_once "conexion2.php";

  class UsuariosM extends Conexion{
  	static public function RegistrarUsuariosM($datosC, $tablaBD){
  		$pdo = Conexion::cBD()->prepare("INSERT INTO $tablaBD (nombre, email, clave, cargo) VALUES (:nombre, :email, :clave, :cargo)");

  		$pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
      $pdo -> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
      $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
      $pdo -> bindParam(":cargo", $datosC["cargo"], PDO::PARAM_STR);

      if($pdo-> execute()){
      	return "Bien";
      }else{
      	return "Error";
      }

      $pdo -> close();
  	}
  }

  static public function MostrarUsuariosM($tablaBD){
  	$pdo = Conexion::cBD()->prepare("SELECT id, nombre, email, clave, cargo FROM $tablaBD");

  	$pdo -> execute();

  	return $pdo ->fetchAll();

  	$pdo -> close();
  }

  static public function EditarUsuariosM($datosC, $tablaBD){
  	$pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, apellido, email, clave, cargo FROM $tablaBD WHERE id=::id");
  	$pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

  	$pdo -> execute();
  	return $pdo->fetch();
  	$pdo -> close();
  }
?>
