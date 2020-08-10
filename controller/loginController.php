<?php

  # Leemos las variables enviadas mediante Ajax
  $user = $_POST['user_php'];
  $clave = $_POST['clave_php'];

  # Verificamos que los campos no esten vacios, el chiste de este if es que si almenos una variable (o campo) esta vacio mostrara error_1
  if(empty($user) || empty($clave)){

    # mostramos la respuesta de php (echo)
    echo 'error_1';

  }else{

    if(filter_var($user, FILTER_VALIDATE_EMAIL)){

    require_once('../model/usuario.php');

    $usuario = new Usuario();

    $usuario -> login($user, $clave);

    }else{
      echo 'error_2';
    }

  }


?>