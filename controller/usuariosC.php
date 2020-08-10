<?php
include("../view/modulos/db.php");

public function MostrarUsuariosC(){

  	$tablaBD = "usuarios";

  	$respuesta = Empleados::MostrarUsuariosM($tablaBD);

  	foreach ($respuesta as $key => $value) {
			 echo '<tr>
				<td>'.$value["nombre"].'</td>
				<td>'.$value["email"].'</td>
				<td>'.$value["clave"].'</td>
				<td>$'.$value["cargo"].'</td>
				<td><a href="editar2.php?ruta=editar&id='.$value["id"].'"></a><button>Editar</button></td>
				<td><button>Borrar</button></td>
			</tr>';
  	}
  }

  class UsuariosC {
  	public function RegistrarUsuariosC {
  		if(isset($_POST["nombreR"])){
        $datosC = array("nombre"=>$_POST["nombreR"], "email"=>$_POST["emailR"], "clave"=MD5(>$_POST["puestoR"]), "cargo"=>$_POST["cargoR"]);

        $tablaBD = "usuarios";

        $respuesta = UsuariosM::RegistrarUsuariosM($datosC, $tablaBD);
        if($respuesta == "Bien"){
          header("location: edit2.php?ruta=usuarios");
        }else{
        	echo "error";
        }
  		}
  	}

  }

}
  public function EditarUsuariosC(){

  	$datosC = $_GET["id"];

  	$tablaBD = "usuarios";

  	$respuesta = UsuariosM::EditarUsuariosM($datosC, $tablaBD);
  }

?>
