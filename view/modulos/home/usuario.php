<?php

  require_once 'conexion.php';

  class Usuario extends Conexion
  {

    public function login($user, $clave)
    {

      parent::conectar();

      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);

      $consulta = 'select id, nombre, apellido, cargo from usuarios where email="'.$user.'" and clave= MD5("'.$clave.'")';


      $verificar_usuario = parent::verificarRegistros($consulta);


      if($verificar_usuario > 0){
        echo 'Si hay resultados';
        $user = parent::consultaArreglo($consulta);

        session_start();

        $_SESSION['id']     = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['cargo']  = $user['cargo'];


        if($_SESSION['cargo'] == 1){
          echo 'public_html/view/admin.php';
        }else if($_SESSION['cargo'] == 2){
          echo 'public_html/view/user.php';
        }

      }else{
        echo 'error_3';
      }

      parent::cerrar();
    }

    public function registroUsuario($name, $email, $clave)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $email = parent::filtrar($email);
      $clave = parent::filtrar($clave);

      $verificarCorreo = parent::verificarRegistros('select id from usuarios where email="'.$email.'" ');


      if($verificarCorreo > 0){
        echo 'error10_r';
      }else{

        parent::query('insert into usuarios(nombre, apellido, email, clave, cargo) values("'.$name.'", "'.$apellido.'", "'.$email.'", MD5("'.$clave.'"), 2)');

        session_start();

        $_SESSION['nombre'] = $name;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['email'] = $email;
        $_SESSION['cargo']  = 2;

      }

      parent::cerrar();
    }

  }


?>
