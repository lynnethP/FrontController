<!DOCTYPE html>
<html>
<head>
	<title>Login || Electiva</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=_THEME_?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=_THEME_?>/css/css.css">
	<script type="text/javascript" src="<?=_THEME_?>/js/bootstrap.min.js ?>"></script>
<!-- Link de bootstrap 5 en su página -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
      <section>
        <div class="row g-0">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <!-- <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li> -->
                      <!-- <li data-target="#carouselExampleCaptions" data-slide-to="1"></li> -->
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item img-1 min-vh-100 active" id="img-1">
                      	<img style="width:100%;" src="<?=_ASSETS_?>img/img-1.jpg?>" class="iimg-1" >
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Más de 100 cursos de Higiene y Seguridad Laboral</h5>
                          <a class="text-muted text-decoration-none">Visita nuestra página</a>
                        </div>
                      </div>
                      <div class="carousel-item img-2 min-vh-100" id="img-2">
                      	<img style="width:100%;" src="<?=_ASSETS_?>img/img-2.jpg?>" class="img-2" >
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Aprende cada técnica con nosotros</h5>
                          <a class="text-muted text-decoration-none">Opten conocimientos</a>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="col-lg-5  d-flex flex-column align-items-end min-vh-100" id="bg-dark">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 mb-0 w-100">
                    <img src="<?=_ASSETS_?>img/libretita.png?>" width="100"  class="img-fluid"  />
                </div>
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4"> 
                <h1 class="font-weight-bold mb-4">Bienvenido</h1>
                <form class="mb-5">
                    <div class="mb-4">
                      <label for="exampleInputUsuario" class="form-label font-weight-bold">Usuario</label>
                      <input type="text" class="form-control  border-0" id="usuario" placeholder="Ingresa tu usuario">
                      <div class="content-input user" style="color:red"><p></p></div>
                    </div>
                    <div class="mb-4">
                      <label for="password" class="form-label font-weight-bold">Contraseña</label>
                      <input type="password" id="password" class="form-control  border-0 mb-2" placeholder="Ingresa tu contraseña" id="password">
                      <div class="content-input pass" style="color:red"><p></p></div>


                      <a href="" id="usuarioayuda" class="form-text text-muted text-decoration-none">¿Olvidaste tu contraseña?</a>
                    </div>
                    <button type="submit" id="loginBtn" class="btn btn-primary w-100">Iniciar sesión</button>
                  </form>

                <p class="font-weight-bold text-center text-muted">O inicia sesión con</p>
                <div class="d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-light flex-grow-1 mr-2"><i class="fab fa-google lead mr-2"></i> Google</button>
                    <button type="button" class="btn btn-outline-light flex-grow-1 ml-2"><i class="fab fa-facebook-f lead mr-2"></i> Facebook</button>
                </div>
                </div>
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100 " id="usuarioayuda">
                    <p class="d-inline-block mb-0 text-light font-weight-bold text-decoration-none" >¿Todavia no tienes una cuenta?</p> <a href="<?=$directory?>registro" class="text-light font-weight-bold text-decoration-none">Registrarse</a>
                </div>
            </div>
        </div>
      </section>


<!-- Carrusel -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
      $(document).ready(function() {

      $('#loginBtn').click(function(e) {
        e.preventDefault();

        if($("#usuario").val().length > 3) {
          $(".content-input.user p").attr("style", "visibility:hidden;margin-top:.2vw");
          if($("#password").val().length > 3) {
            $(".content-input.pass p").attr("style", "visibility:hidden;margin-top:.2vw");
            let user = $("#usuario").val();
            let pass = $("#password").val();
            
            $.ajax({
                url: '',
                type: 'POST',
                data: {
                  loginSistema: true,
                  username: user,
                  password: pass,
                },
                success: function(respuesta){
                  // alert(respuesta);
                  var data = JSON.parse(respuesta);

                   if (data.msj === "Good") {
                     $(".content-input.pass p").attr("style", "visibility:hidden;margin-top:.2vw");
                     $(".content-input.user p").attr("style", "visibility:hidden;margin-top:.2vw");
                     Swal.fire({
                        position: 'bottom-end',
                        type: 'success',
                        timer: 1500,
                        showConfirmButton: false,
                     }).then(function(){
                        window.location = "<?=_ROUTE_?>home";
                      });
                     // window.location = "?url=home";
                     // return;
                   }
                   if (data.msj === "Account locked. Contact support for more information.") {
                     $(".content-input.user p").html("Cuenta bloqueada. Contacte al soporte para mas informacion.");
                     $(".content-input.user p").attr("style", "visibility:;margin-top:.2vw");
                     return;
                   }
               if (data.msj === "Usuario o contraseña invalido!") {
                 $(".content-input.pass p").html(data.msj);
                 $(".content-input.pass p").attr("style", "visibility:;margin-top:.2vw");
                 return;
               }
               // if (data.msj === "Password invalid!") {
               //   $(".content-input.user p").html("Caracteres incorrectos!");
               //   $(".content-input.user p").attr("style", "visibility:hidden;margin-top:.2vw");
               //   return;
               // }
               // if (data.msj === "Usuario o contraseña invalido!") {
               //   $(".content-input.user p").html("Caracteres incorrectos!");
               //   $(".content-input.user p").attr("style", "visibility:hidden;margin-top:.2vw");
               //   $(".content-input.pass p").html("Caracteres incorrectos!");
               //   $(".content-input.pass p").attr("style", "visibility:hidden;margin-top:.2vw");
               //   return;
               // } else{
               //   $(".content-input.user p").attr("style", "visibility:hidden;margin-top:.2vw");
               //   $(".content-input.pass p").html(data.msj);
               //   $(".content-input.pass p").attr("style", "visibility:hidden;margin-top:.2vw");
               //   return;
               // }
                  
                },error: function(respuesta){
                  var data = JSON.parse(respuesta);
                  console.log(data);

                }
              }); 
          
          }else{
            // alert("PAssword VACIA");
            $(".content-input.pass p").html("Ingrese contraseña!");
            $(".content-input.pass p").attr("style", "visibility:;margin-top:.2vw");
          }

        } else{
            // alert("USER VACIO");
          $(".content-input.user p").html("Ingrese nombre de usuario!");
          $(".content-input.user p").attr("style", "visibility:;margin-top:.2vw");
        }
        
      })
    });
    </script>
  </body>
</html>



















<!-- <body>

	<p>codigo HTML para el login</p>
	<a href="<?=$directory?>registro">Registrarse</a>
</body>
</html> -->