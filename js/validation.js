//alert("Llamada al archivo JS exitoso");

function validacion(){

    var clave = document.getElementById('clave').value;
    var user = document.getElementById('user').value;

       if(clave == ""){
           $("#error1_c").show();
           return false;
       }

       if(user == ""){
           $("#error1_u").show();
           return false;
       }

}

function validacionR(){
    var nombre, apellido, email, clave, clave2, expresion;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    email = document.getElementById("email").value;
    clave = document.getElementById("clave").value;
    clave2 = document.getElementById("clave2").value;
    expresion = /\w+@\w+\.+[a-z]/;

    if(nombre == ""){
        $("#error1_r").show();
        return false;
    }

    if(apellido == ""){
        $("#error2_r").show();
        return false;
    }

    if(email == ""){
        $("#error3_r").show();
        return false;
    }

    if(clave == ""){
        $("#error4_r").show();
        return false;
    }

    if(clave2 == ""){
        $("#error5_r").show();
        return false;
    }

    else if(nombre.length>25){
        $("#error6_r").show();
        return false;
    }

    else if(apellido.length>25){
        $("#error7_r").show();
        return false;
    }

    else if(email.length>45){
        $("#error8_r").show();
        return false;
    }

    else if(clave.length>25){
        $("#error9_r").show();
        return false;
    }

    else if(!expresion.test(email)){
        $("#error10_r").show();
        return false;
    }


}
