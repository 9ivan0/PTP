<!-- cart -->
    <div class="modal fade sidebar" id="cart" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cartLabel" style="font-weight: bold;">Carro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <center>
            <br><br><br>
            <div class="cesta_vacia">
               <img width="150" src="view/modulos/img/cesta_v.png" alt="">
               <br><br>
             <h5 style="font-weight: bold;">Tu carro está vacío</h5>
             <div class="cart-info" style="font-family: 'Muli', sans-serif; width: 40%; font-size: 12px;">
             <p style="color: #414141;">Comprueba si tienes productos en la wishlist, ¡y no te quedes sin stock!
               También puedes ver las últimas novedades</p>
             </div>
             <br><br>
             <div class="botones_cart">
               <a class="btn btn-block btn-primary" style="font-size: 10.5px; width: 70%; background: transparent; color: #000; border-color: #000;">Ver wishlist</a>
             <br>
               <a class="btn btn-block btn-primary" style="font-size: 10.5px; width: 70%; background: #000; color: #FFF; border-color: #000;" href="view/modulos/novedades.php">Ver Novedades</a>
             </div>
            </div>
          </center>
          </div>
        </div>
      </div>
    </div>

    <!-- / cart -->

    <!-- cart 2-->
    <div class="modal fade sidebar" id="cart2" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cartLabel" style="font-weight: bold;">Carro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <center>
            <br><br><br>
            <div class="cesta_vacia">
               <img width="150" src="modulos/img/cesta_v.png" alt="">
               <br><br>
             <h5 style="font-weight: bold;">Tu carro está vacío</h5>
             <div class="cart-info" style="font-family: 'Muli', sans-serif; width: 40%; font-size: 12px;">
             <p style="color: #414141;">Comprueba si tienes productos en la wishlist, ¡y no te quedes sin stock!
               También puedes ver las últimas novedades</p>
             </div>
             <br><br>
             <div class="botones_cart">
               <a class="btn btn-block btn-primary" style="font-size: 10.5px; width: 70%; background: transparent; color: #000; border-color: #000;">Ver wishlist</a>
             <br>
               <a class="btn btn-block btn-primary" style="font-size: 10.5px; width: 70%; background: #000; color: #FFF; border-color: #000;" href="view/modulos/novedades.php">Ver Novedades</a>
             </div>
            </div>
          </center>
          </div>
        </div>
      </div>
    </div>

    <!-- / cart 2-->

    <!-- User -->
    <div class="modal fade sidebar" id="user" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="">
        <div class="modal-content">
          <div class="modal-header">
            <div class="form-group col-12" id="Log">
            <h5 style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: bold; cursor: default;"> ACCEDE A TU CUENTA</h5>
          </div>
          <div class="form-group col-12" id="regis" style="display: none;">
            <h5 style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: bold; cursor: default;"> REGISTRATE</h5>
          </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <br>
          <div class="modal-body" style="margin-top: -20px;">
              <div class="login_form" id="Log2">
            <form method="POST">
              <div class="form-group col-12" id="formu">
                <input style="background: #FDFDFD; border: none; border-bottom: 1px solid #cacaca; height: 60px; font-size: 12px; z-index: 3"; autocomplete="off" type="text" name="user" class="form-control" id="user" placeholder="Dirección de e-mail">
              </div>
              <span id="error1_u" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">Por favor, rellena este campo.</span>
              <span id="error2_u" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">El email que ingresaste es incorrecto.</span>
              <div class="espaciador_l"></div>
              <div class="form-group col-12 mt-1" id="formu">
                <input style="background: #FDFDFD; border: none; border-bottom: 1px solid #cacaca; height: 60px; font-size: 12px; z-index: 3"; autocomplete="off" type="password" name="clave" class="form-control" id="clave" placeholder="Contraseña">
              </div>
              <span id="error1_c" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">Por favor, rellena este campo.</span>
               <span id="error2_c" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">La contraseña que ingresaste es incorrecta.</span>
              <div class="espaciador_l"></div>
              <div class="col-12" style="font-size: 12px;">
                <input style="background: #2E2E2E; border-color: #2E2E2E; font-size: 12px;" type="submit" class="btn btn-block btn-primary" name="login" id="login" value="Acceder"><br><br><br>
              </div>
          </form>
             <center>
             <div class="titulo_login" style="display: flex; position: absoule; bottom: 20px; color: #000;">
             <hr style="width: 30%; color: #000;"><p style="cursor: default;">¿Eres nuevo?</p><hr style="width: 30%; color: #000;">
             </center><br><br>
             <div class="col-12" style="font-size: 12px;">
                 <a style="position: absolute; bottom: 0px; width: 93%; font-size: 12px;" class="btn btn-block btn-primary" id="Registro" onclick="mostrar()">Regístrate</a>
              </div>
              </div>

    <!-- Registro -->

        <form onSubmit="return validacionR();" class="formulario_registro" name="formulario_registro" method="POST" id="regis2" style="display: none; margin-top: -35px;">
              <div class="form-group col-12 mt-1" id="formu">
                <input style="background: #FDFDFD; border: none; border-bottom: 1px solid #cacaca; height: 60px; font-size: 12px; z-index: 3" autocomplete="off" type="text" name="nombre" class="form-control" id="nombre" placeholder="NOMBRE">
              </div>
              <span id="error1_r" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">Por favor, rellena este campo.</span>
              <div class="espaciador_r"></div>
              <div class="form-group col-12 mt-1" id="formu">
                <input style="background: #FDFDFD; border: none; border-bottom: 1px solid #cacaca; height: 60px; font-size: 12px; z-index: 3" autocomplete="off" type="text" name="apellido" class="form-control" id="apellido" placeholder="APELLIDO">
              </div>
              <span id="error2_r" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">Por favor, rellena este campo.</span>
              <div class="espaciador_r"></div>
              <div class="form-group col-12 mt-1" id="formu">
                <input style="background: #FDFDFD; border: none; border-bottom: 1px solid #cacaca; height: 60px; font-size: 12px; z-index: 3" autocomplete="off" type="text" name="email" class="form-control" id="email" placeholder="EMAIL">
              </div>
              <span id="error3_r" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">Por favor, rellena este campo.</span>
                <span id="error10_r" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">El email no es válido.</span>
                <span id="error11_r" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">El email ingresado ya existe.</span>
              <div class="espaciador_r"></div>
              <div class="form-group col-12" id="formu">
                <input style="background: #FDFDFD; border: none; border-bottom: 1px solid #cacaca; height: 60px; font-size: 12px; z-index: 3" autocomplete="off" type="password" name="clave" class="form-control" id="clave" placeholder="CONTRASEÑA">
              </div>
              <span id="error4_r" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">Por favor, rellena este campo.</span>
                <span id="error12_r" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">Las contraseñas no coinciden.</span>
              <div class="espaciador_r"></div>
              <div class="form-group col-12" id="formu">
                <input style="background: #FDFDFD; border: none; border-bottom: 1px solid #cacaca; height: 60px; font-size: 12px; z-index: 3" autocomplete="off" type="password" name="clave2" class="form-control" id="clave2" placeholder="REPETIR CONTRASEÑA">
              </div>
               <span id="error5_r" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">Por favor, rellena este campo.</span>
                <span id="error13_r" style="display: none; margin-left: 26px; color: #E83C55; font-size: 13px; cursor: default;">Las contraseñas no coinciden.</span>
              <div class="espaciador_r"></div>
              <div class="col-12" style="font-size: 12px;">
                <input style="background: #2E2E2E; border-color: #2E2E2E; font-size: 12px;" type="submit" class="btn btn-block btn-primary" name="registrate" id="registrate" value="Regístrate">
              </div><div class="espaciador_3"></div>
              <center>
              <a style="cursor: pointer; text-decoration: none; color: #2f2f2f; font-size: 13px;" id="volver">Volver al Login</a></center>
    </form>
    </div>
          </div>
        </div>
      </div>
      </div>

      <style>

        #volver:hover{
            font-weight: bold;

        }

        #Registro {
            background: transparent;
            border-color: #000;
            color: #000;
        }

        #Registro:hover {
            background: #000;
            border-color: #000;
            color: #fff;
            transition: all ease 0.4s;
        }

        #login {
            color: #fff;
        }

        #login:hover {
            background: #000;
            border-color: #000;
            color: #fff;
            transition: all ease 0.4s;
        }

         .espaciador_l {
             height: 20px;
         }

         input[type="text"]::placeholder {
           color: #D4D4D4;
           font-family: 'Graphik', sans-serif;
         }

        .botones_cart a:hover{
           box-shadow: 1px 1px 1px #888888;
        }

        #btn-primary:hover {
          background: #000;
          color: #fff;
          border-color: #000;
        }

        .espaciador_u {
            height: 10px;
        }

        .espaciador_r {
            height: 20px;
        }

        .espaciador_3{
            height: 12px;
        }

        .form-control:hover{
        border-bottom: 1px solid #76C868;
        cursor: pointer;
    }

        .form-control:focus{
        border-bottom: 2px solid #76C868;
        cursor: text;
    }

      </style>

    <!-- search -->
    <div class="modal fade search" id="search" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <center>
            <br>
          <a href="" class="navbar-brand order-1 order-lg-2"><img src="view/modulos/img/logo2.png" alt="Logo"></a></center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; font-weight: 100;font-size: 35px; right: 3%; top: 5%; outline: none;">
          <span aria-hidden="true">&times;</span>
        </button>
          <center>
          <div class="modal-header">
            <div class="ebx-search-box__inputs-wrapper">
            <input aria-label="Caja de búsqueda" maxlength="40" aria-labelledby="ebx-search-box-placeholder" placeholder="¿Qué estás buscando?" inputmode="search" type="search" class="ebx-search-box__input ebx-search-box__input-query" id="buscar" autofocus="focus"/>
            <span class="search" style="background-image: none; position: absolute; right: 21.7%; top: 38%; border-bottom: 1px solid #000; padding: 7px; z-index: 2;">
              <img src="view/modulos/img/search.png" alt="">
              </span>
            <input aria-label="Sugerencia de búsqueda " disabled="disabled" class="ebx-search-box__input ebx-search-box__input-suggestion" style="display: none;">
          </div>
          </div></center>
          <!--->
          <!--->
          <center>
          <section class="Trending" style="width: 57%;">
            <section class="ebx-suggestions ebx-popular-searches">
              <div class="ebx-suggestions__title" style="text-align: left;">
              <h4 class="eyebrow mb-2">Trending</h4>
            </div>
            <ul class="ebx-suggestions__list" style="text-align: left;">
             <li role="listitem" aria-label="chaqueta hombre" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
                <span class="ebx-suggestion__term">Chaqueta hombre</span>
               <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="jeans" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
               <span class="ebx-suggestion__term">Jeans</span>
               <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="chaqueta" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
               <span class="ebx-suggestion__term">Chaqueta</span>
              <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="hombre" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
              <span class="ebx-suggestion__term">Hombre</span>
              <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="camiseta" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
               <span class="ebx-suggestion__term">Camiseta</span>
              <!----><!----></li>
            </ul>
          </section>
          </section>
            <section class="ebx-suggestions ebx-history">
            <!----></section>
            <br>


        </div>
      </div>
    </div>

    <!-- User 1 -->
    <div class="modal fade sidebar" id="user1" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="cursor: default;">
              <h6 class="modal-title" style="font-weight: bold;">HOLA!</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="margin-top: -30px;">
              <center>

                 <img src="modulos/img/user2.png" style="width: 40%;"/>

                 <hr class="titulo_u">
            <span class="text-muted" style="cursor: default;">Administrador</span>
                 <hr class="titulo_u">
            <br>

                    <div class="row" style="width: 60%; border: 1px solid #E0E0E0">
                        <ul class="col-6 col-md-3 col-lg-2" id="modulos">
                            <center>
                           <li class="title_tab"><h6 style="font-weight: bold; cursor: default;">Modulos</h6></li></center>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="modulos/m/usuarios.php">Usuarios</a>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="modulos/m/facturas.php">Facturas</a>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="modulos/m/inventario.php">Inventario</a>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="modulos/m/proveedor.php">Proveedores</a>
                           </ul>
                    </div>

            <a style="position: absolute; bottom: 20px; left: 20%; width: 60%;" href="modulos/cerrarSesion.php" class="btn btn-block btn-primary" id="cerrarS">Cerrar Sesión</a>

          </center>
        </div>
          </div>
        </div>
      </div>
    </div>

    <!-- User 4 -->
    <div class="modal fade sidebar" id="user4" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="cursor: default;">
              <h6 class="modal-title" style="font-weight: bold;">HOLA !</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="margin-top: -30px;">
              <center>

                 <img src="../img/user2.png" style="width: 40%;"/>

                 <hr class="titulo_u">
            <span class="text-muted" style="cursor: default;">Administrador</span>
                 <hr class="titulo_u">
            <br>

                    <div class="row" style="width: 60%; border: 1px solid #E0E0E0">
                        <ul class="col-6 col-md-3 col-lg-2" id="modulos">
                            <center>
                           <li class="title_tab"><h6 style="font-weight: bold; cursor: default;">Modulos</h6></li></center>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="../m/usuarios.php">Usuarios</a>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="../m/facturas.php">Facturas</a>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="../m/inventario.php">Inventario</a>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="../m/proveedor.php">Proveedores</a>
                           </ul>
                    </div>

            <a style="position: absolute; bottom: 20px; left: 20%; width: 60%;" href="../cerrarSesion.php" class="btn btn-block btn-primary" id="cerrarS">Cerrar Sesión</a>

          </center>
        </div>
          </div>
        </div>
      </div>
    </div>


    <style>
       .title_tab{
            width: 215px;
            border-bottom: 1px solid #E0E0E0;
        }

        #modulos .opciones {
            color: #2E2E2E;
        }

        .opciones:hover{
            font-weight: bold;
        }

        #cerrarS {
            background: transparent;
            border-color: #000;
            color: #000;
        }

        #cerrarS:hover {
            background: #2E2E2E;
            border-color: #2E2E2E;
            color: #fff;
            transition: all ease 0.4s;
        }

        .titulo_u {
            width: 50%;
        }

        .datos:hover{
            font-weight: bold;
            cursor: pointer;
        }

        .info{
            list-style: none;
            align-content: left;
        }


        #user::placeholder{
            color: #A6A6A6;
            font-family: 'Muli', sans-serif;
            font-size: 14px;
        }

        #clave::placeholder{
            color: #A6A6A6;
            font-family: 'Muli', sans-serif;
            font-size: 14px;
        }

    </style>

    <!-- User 2 -->
    <div class="modal fade sidebar" id="user2" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="cursor: default;">
              <h6 class="modal-title" style="font-weight: bold;">HOLA!</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="margin-top: -30px;">
              <center>

                 <img src="modulos/img/user2.png" style="width: 40%;"/><br>
                 <hr class="titulo_u">
            <span class="text" style="font-weight: bold;">USUARIO</span>
            <hr class="titulo_u">
            <br>

               <div class="info">
                   <li><a class="datos">Datos personales</a></li>
                   <div class="espaciador_u"></div>
                   <li><a class="datos">Tus pedidos</a></li>
                   <div class="espaciador_u"></div>
                   <li><a class="datos">Métodos de pago</a></li>
                   <div class="espaciador_u"></div>
                   <li><a class="datos">Newsletter</a></li>
                   <div class="espaciador_u"></div>
                   <li><a class="datos"></a></li>
               </div>

            <a style="position: absolute; bottom: 20px; left: 20%; width: 60%;" href="modulos/cerrarSesion.php" class="btn btn-block btn-primary" id="cerrarS">Cerrar Sesión</a>

          </center>
        </div>
          </div>
        </div>
      </div>
    </div>

    <!-- User 3 -->
    <div class="modal fade sidebar" id="user3" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="cursor: default;">
              <h6 class="modal-title" style="font-weight: bold;">HOLA !</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="margin-top: -30px;">
              <center>

                 <img src="../img/user2.png" style="width: 40%;"/>

                 <hr class="titulo_u">
            <span class="text-muted" style="cursor: default;">Administrador</span>
                 <hr class="titulo_u">
            <br>

                    <div class="row" style="width: 60%; border: 1px solid #E0E0E0">
                        <ul class="col-6 col-md-3 col-lg-2" id="modulos">
                            <center>
                           <li class="title_tab"><h6 style="font-weight: bold; cursor: default;">Modulos</h6></li></center>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="../m/usuarios.php">Usuarios</a>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="../m/facturas.php">Facturas</a>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="../m/inventario.php">Inventario</a>
                           <div class="espaciador_u"></div>
                           <a class="opciones" id="opciones" href="../m/proveedor.php">Proveedores</a>
                           </ul>
                    </div>

            <a style="position: absolute; bottom: 20px; left: 20%; width: 60%;" href="../cerrarSesion.php" class="btn btn-block btn-primary" id="cerrarS">Cerrar Sesión</a>

          </center>
        </div>
          </div>
        </div>
      </div>
    </div>

        <!-- Search 1-->
    <div class="modal fade search" id="search1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <center>
            <br>
          <a href="" class="navbar-brand order-1 order-lg-2"><img src="modulos/img/logo2.png" alt="Logo"></a></center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; font-weight: 100;font-size: 35px; right: 3%; top: 5%; outline: none;">
          <span aria-hidden="true">&times;</span>
        </button>
          <center>
          <div class="modal-header">
            <div class="ebx-search-box__inputs-wrapper">
            <input aria-label="Caja de búsqueda" maxlength="40" aria-labelledby="ebx-search-box-placeholder" placeholder="¿Qué estás buscando?" inputmode="search" type="search" class="ebx-search-box__input ebx-search-box__input-query" id="buscar" autofocus/>
            <span class="search" style="background-image: none; position: absolute; right: 21.7%; top: 38%; border-bottom: 1px solid #000; padding: 7px; z-index: 2;">
              <img src="modulos/img/search.png" alt="">
              </span>
            <input aria-label="Sugerencia de búsqueda " disabled="disabled" class="ebx-search-box__input ebx-search-box__input-suggestion" style="display: none;">
          </div>
          </div></center>
          <!--->
          <!--->
          <center>
          <section class="Trending" style="width: 57%;">
            <section class="ebx-suggestions ebx-popular-searches">
              <div class="ebx-suggestions__title" style="text-align: left;">
              <h4 class="eyebrow mb-2">Trending</h4>
            </div>
            <ul class="ebx-suggestions__list" style="text-align: left;">
             <li role="listitem" aria-label="chaqueta hombre" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
                <span class="ebx-suggestion__term">Chaqueta hombre</span>
               <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="jeans" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
               <span class="ebx-suggestion__term">Jeans</span>
               <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="chaqueta" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
               <span class="ebx-suggestion__term">Chaqueta</span>
              <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="hombre" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
              <span class="ebx-suggestion__term">Hombre</span>
              <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="camiseta" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
               <span class="ebx-suggestion__term">Camiseta</span>
              <!----><!----></li>
            </ul>
          </section>
          </section>
            <section class="ebx-suggestions ebx-history">
            <!----></section>
            <br>


        </div>
      </div>
    </div>

    <!-- Search 3-->
    <div class="modal fade search" id="search3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <center>
            <br>
          <a href="" class="navbar-brand order-1 order-lg-2"><img src="../img/logo2.png" alt="Logo"></a></center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; font-weight: 100;font-size: 35px; right: 3%; top: 5%; outline: none;">
          <span aria-hidden="true">&times;</span>
        </button>
          <center>
          <div class="modal-header">
            <div class="ebx-search-box__inputs-wrapper">
            <input aria-label="Caja de búsqueda" maxlength="40" aria-labelledby="ebx-search-box-placeholder" placeholder="¿Qué estás buscando?" inputmode="search" type="search" class="ebx-search-box__input ebx-search-box__input-query" id="buscar" autofocus/>
            <span class="search" style="background-image: none; position: absolute; right: 21.7%; top: 38%; border-bottom: 1px solid #000; padding: 7px; z-index: 2;">
              <img src="../img/search.png" alt="">
              </span>
            <input aria-label="Sugerencia de búsqueda " disabled="disabled" class="ebx-search-box__input ebx-search-box__input-suggestion" style="display: none;">
          </div>
          </div></center>
          <!--->
          <!--->
          <center>
          <section class="Trending" style="width: 57%;">
            <section class="ebx-suggestions ebx-popular-searches">
              <div class="ebx-suggestions__title" style="text-align: left;">
              <h4 class="eyebrow mb-2">Trending</h4>
            </div>
            <ul class="ebx-suggestions__list" style="text-align: left;">
             <li role="listitem" aria-label="chaqueta hombre" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
                <span class="ebx-suggestion__term">Chaqueta hombre</span>
               <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="jeans" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
               <span class="ebx-suggestion__term">Jeans</span>
               <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="chaqueta" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
               <span class="ebx-suggestion__term">Chaqueta</span>
              <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="hombre" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
              <span class="ebx-suggestion__term">Hombre</span>
              <!----><!----></li>
             <li style="width: 7px;"role="listitem" aria-label="camiseta" class="ebx-suggestion ebx-term-suggestion ebx-popular-search ebx-popular-searches__item">
               <span class="ebx-suggestion__term">Camiseta</span>
              <!----><!----></li>
            </ul>
          </section>
          </section>
            <section class="ebx-suggestions ebx-history">
            <!----></section>
            <br>


        </div>
      </div>
    </div>

     <!-- filter -->
    <div class="modal fade sidebar" id="filter" tabindex="-1" role="dialog" aria-labelledby="filterLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="filterLabel">Filter</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <!-- categories -->
            <div class="widget">
              <span class="widget-collapse d-lg-none" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1" role="button">
                Filter by Category
              </span>
              <div class="d-lg-block collapse" id="collapse-1">
                <span class="widget-title">Categories</span>
                <div class="widget-content">
                  <ul id="page-nav" class="nav flex-column nav-category">
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="collapse" href="#menu-2" role="button" aria-expanded="false" aria-controls="menu-2">Women</a>
                      <div class="collapse" id="menu-2" data-parent="#page-nav">
                        <div>
                          <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link" href="#!">New In</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!">Clothing</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!">Shoes</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!">Accessories</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!">Face + Body</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!">Outlet</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="collapse" href="#menu-3" role="button" aria-expanded="false" aria-controls="menu-3">Men</a>
                      <div class="collapse" id="menu-3" data-parent="#page-nav">
                        <div>
                          <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link" href="#!">New In</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!">Clothing</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!">Shoes</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!">Accessories</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!">Face + Body</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!">Outlet</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- / categories -->


            <!-- brands -->
            <div class="widget">
              <span class="widget-collapse d-lg-none" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2" role="button">
                Filter by Brand
              </span>
              <div class="d-lg-block collapse" id="collapse-2">
                <span class="widget-title">Brands</span>
                <div class="widget-content">
                  <ul>
                    <li>
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Calvin Klein <span>20</span></label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label" for="customCheck2">Ralph Lauren <span>20</span></label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck3">
                          <label class="custom-control-label" for="customCheck3">Michael Kors <span>20</span></label>
                      </div>
                    </li>
                    <li>
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck4">
                          <label class="custom-control-label" for="customCheck4">Balenciaga <span>20</span></label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- / brands -->


            <!-- size -->
            <div class="widget">
              <span class="widget-collapse d-lg-none" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3" role="button">
                Filter by Size
              </span>
              <div class="d-lg-block collapse" id="collapse-3">
                <span class="widget-title">Size</span>
                <div class="widget-content">
                  <div class="btn-group-toggle btn-group-square" data-toggle="buttons">
                    <label class="btn active">
                      <input type="checkbox" name="options" id="option1" checked> S
                    </label>
                    <label class="btn">
                      <input type="checkbox" name="options" id="option2"> M
                    </label>
                    <label class="btn">
                      <input type="checkbox" name="options" id="option3"> L
                    </label>
                    <label class="btn">
                      <input type="checkbox" name="options" id="option4"> XL
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- / size -->



            <!-- color -->
            <div class="widget">
              <span class="widget-collapse d-lg-none" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4" role="button">
                Filter by Color
              </span>
              <div class="d-lg-block collapse" id="collapse-4">
                <span class="widget-title">Color</span>
                <div class="widget-content">
                  <div class="btn-group-toggle btn-group-square btn-group-colors" data-toggle="buttons">
                    <label class="btn active text-red">
                      <input type="checkbox" name="options" id="option1-2" checked>
                    </label>
                    <label class="btn text-blue">
                      <input type="checkbox" name="options" id="option2-2">
                    </label>
                    <label class="btn text-yellow">
                      <input type="checkbox" name="options" id="option3-2">
                    </label>
                    <label class="btn text-green">
                      <input type="checkbox" name="options" id="option4-2">
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- / color -->



            <!-- price -->
            <div class="widget">
              <span class="widget-collapse d-lg-none" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5" role="button">
                Filter by Price
              </span>
              <div class="d-lg-block collapse" id="collapse-5">
                <span class="widget-title">Price</span>
                <div class="widget-content">
                  <input type="text" class="rangeslider" name="Range Slider" value="" />
                </div>
              </div>
            </div>
            <!-- / price -->

          </div>
          <div class="modal-footer">
            <div class="container-fluid">
              <div class="row gutter-0">
                <div class="col">
                  <a href="checkout.html" class="btn btn-lg btn-block btn-primary">Apply Filter</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
