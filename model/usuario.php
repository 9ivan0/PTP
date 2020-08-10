<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');


  class Usuario extends Conexion
  {

    public function login($user, $clave)
    {

      parent::conectar();

      $user  = parent::filtrar($user);
      $clave = parent::filtrar($clave);


      // traemos el id y el nombre de la tabla usuarios donde el usuario sea igual al usuario ingresado y ademas la clave sea igual a la ingresada para ese usuario.
      $consulta = 'select idusuario, nombre, cargo FROM usuarios WHERE email = "'.$user.'" and clave = MD5("'.$clave.'")';

      $verificar_usuario = parent::verificarRegistros($consulta);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){


        $user = parent::consultaArreglo($consulta);


        session_start();


        $_SESSION['idusuario']     = $user['idusuario'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['cargo']  = $user['cargo'];


        if($_SESSION['cargo'] == 1){
          echo 'view/admin.php';
        }else if($_SESSION['cargo'] == 2){
          echo 'view/user.php';
        }


      }else{
        echo 'error_3';
      }


      # Cerramos la conexion
      parent::cerrar();
    }

    public function registroUsuario($name, $email, $clave)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $email = parent::filtrar($email);
      $clave = parent::filtrar($clave);


      // validar que el correo no exito
      $verificarCorreo = parent::verificarRegistros('select idusuario from usuarios where email="'.$email.'" ');


      if($verificarCorreo > 0){
        echo 'error_3';
      }else{

        parent::query('insert into usuarios(nombre, email, clave, cargo) values ("'.$name.'", "'.$email.'", MD5("'.$clave.'"), 2)');

        session_start();

        $_SESSION['nombre'] = $name;
        $_SESSION['cargo']  = 2;

        echo 'view/user.php';

      }

      parent::cerrar();
    }

  }


?>
