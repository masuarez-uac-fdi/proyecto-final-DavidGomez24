
$('#registrar').click(function(){

  var firstName=$('#firstName').val();
  var lastName=$('#lastName').val();
  var mobile="";
  var email="";
  var pass="";
//------------------------- validacion de Correo electronico
                  var cemail = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
                  if (cemail.test($('#email').val()) == true){
                      var email=$('#email').val();

                  } else {
                      return alert('La direccón de correo no es válida');
                  }

//------------------------- validacion de numero celular
                  var cpass = new RegExp(/^[A-Za-z0-9_-]{6,18}$/);
                  if (cpass.test($('#pass').val()) == true){
                      var pass=$('#pass').val();

                  } else {
                      return alert('La contraseña debe contener entre 6 y 18 elementos que pueden ser numeros, letras mayusculas o munisculas, guiones o guines bajos.');
                  }

//------------------------- validacion de numero celular
                  var cmobile = new RegExp(/^([0-9]{9,10})$/);
                  if (cmobile.test($('#mobile').val()) == true){
                      var mobile=$('#mobile').val();

                  } else {
                        return alert('Este campo solo puede contener numeros y debe contener 10 digitos');
                  }



  var date = new Date($('#age').val());
  var age= date.getFullYear() +"-"+ (date.getMonth() + 1) +"-"+ date.getDate();


  var datos={'firstName':firstName,'lastName':lastName,'email':email,'pass':pass,'age':age,'mobile':mobile};
  //console.log("usuario: "+ datos['user'] + " -- password: "+ datos['password']);
  $.ajax({
    url:'app/registryUser.php',
    type:'POST',
    data:datos
    }).done(function(respuesta){


      if (respuesta=="successful") {

        $('#firstName').val("");
        $('#lastName').val("");
        $('#email').val("");
        $('#pass').val("");
        $('#age').val("");
        $('#mobile').val("");
        alert("Registro Exitoso.");
        window.location="index.php";

      }else{

        alert("Error, Registro fallido.");

      }

    });

  });

$('#inicio').click(function(){

  window.location="index.php";
});
