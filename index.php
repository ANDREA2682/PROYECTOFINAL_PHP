<?php
session_start();
include('conexion.php');
if(isset($_SESSION['usuarioingresando']))
{
header('location: productos_tabla.php');
}
?>

<html>

<head>

<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>proyecto final</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">STORE</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Categorias
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Tecnologia</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Categorias</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Ahora</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Contacto</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                  </div>
                </div>
              </nav>

        </div>

    </header>
    <section class="carrusel">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://picsum.photos/1920/500" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h2>¿Buscas tecnologia?</h2>
                  <p>Renueva</p>
                </div>
              
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section class="Nosotros my-5">
      <h2 class="text-center my-5">Quiénes Somos</h2>
      <div class="container">
        <div class="row">
          <div class="col-6">
            <p>somos una compañía especializada en servicios de Tecnología e Innovación. Ayudamos a las empresas y a las personas a concienciarse sobre la importancia de la necesidad de la transformación tecnológica digital: eficiencia y mejora de procesos, digitalización, multicanalidad, identificación indicadores clave negocio, uso recursos cloud, seguridad de la información , consolidación de datos y accesibilidad remota. Aportamos valor a nuestros clientes poniendo a su disposición nuestro experiencia y conocimiento, a los que sumamos un conjunto de servicios y soluciones tecnológicas que nos hace diferentes</p>
            
          </div>
          <div class="col-6">
              <img class="img-fluid" src="https://www.orientacionandujar.es/wp-content/uploads/2016/07/todas-las-categorias.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="Nosotros my-5">
      <h2 class="text-center my-5">Renueva los articulos de tu hogar</h2>
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="https://cdn-images-1.medium.com/max/500/1*TYMKEhU1JSCRBClgjXbplw.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center my-2">Sueña</h5>
                <p class="card-text">"Si te aburres con la vida, si no te levantas cada mañana con un deseo ardiente por hacer cosas, entonces no tienes suficientes metas". —Lou Holtz</p>
                <a href="#" class="btn btn-primary text-center">clic</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center my-2">Metas </h5>
                <p class="card-text">"Si no sabes a dónde vas, probablemente terminarás en otro lugar". —Lawrence J. Peter</p>
                <a href="#" class="btn btn-primary text-center">clic</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="https://www.enter.co/wp-content/uploads/2018/04/tecnologia-compras-por-internet.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center my-2">Decidete</h5>
                <p class="card-text">"Apunta al infinito. Aunque falles, aterrizarás entre las estrellas". —Les Brown</p>
                <a href="#" class="btn btn-primary text-center">clic</a>
              </div>
            </div>
          </div>
      </div>
    
<div class="FormCajaLogin">

<div class="FormLogin">

<div class="botondeintercambiar">
<div id="btnvai"></div>
<button type="button" class="botoncambiarcaja" onclick="loginvai()" id="vaibtnlogin">Login</button>
<button type="button" class="botoncambiarcaja" onclick="registrarvai()" id="vaibtnregistrar">Registrar</button>
</div>

<!-- formulario login -->
<form method="POST" id="frmlogin" class="grupo-entradas" action="usuario_login.php">
<h1>Iniciar sesión</h1>

<div class="TextoCajas">• Ingresar correo</div>
<input type="email" name="txtcorreo" class="CajaTexto" autocomplete="off" required>

<div class="TextoCajas">• Ingresar password</div>
<input type="password"  name="txtpassword" class="CajaTexto" autocomplete="off" required>

<div>
<input type="submit" value="Iniciar sesión" class="BtnLogin" name="btningresar" >
</div>

</form>

<!-- formulario registrar -->
<form method="post" id="frmregistrar" class="grupo-entradas" action="usuario_registrar.php">
<h1>Crear nueva cuenta</h1>

<div class="TextoCajas">• Ingresar nombre</div>
<input type="text" name="txtnombre1" class="CajaTexto" autocomplete="off" required>

<div class="TextoCajas">• Ingresar correo</div>
<input type="email" name="txtcorreo1" class="CajaTexto" autocomplete="off" required>

<div class="TextoCajas">• Ingresar password</div>
<input type="password"  name="txtpassword1" class="CajaTexto" autocomplete="off" required>
 
<div>
<input type="submit" value="Crea nueva cuenta" class="BtnRegistrar" name="btnregistrar">
</div>

</form>
</div>
</div>
</section>
    <section class="contáctenos">
      <h2 class="text-center">Contactanos </h2>
        <div class="container">
              <form>
              <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Dirección de correo electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
              </div>
              <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-1 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Me echa un vistazo</label>
              </div>
              <button type="submit" class="btn btn-primary">enviar</button>
            </form>
        </div>
      </section>
      <footer class=" bg-light text-dark pt-5 pb-4">
            <div class="container text-center text-md-start">
                <div class="row text-center text-md-start">
                    
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Nosotros </h5>
                    <hr class="mb-4">
                    <p> “Mi única explicación es que así como los hechos reales se olvidan,

                      también algunos que nunca fueron pueden estar en los recuerdos como si hubieran sido.”   </p>
                  </div>
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Dejanos ayudarte </h5>
                    <hr class="mb-4">
                    <p>
                        <a href="#" class="text-dark">Tu cuenta</a>
                    </p>
                    <p>
                      <a href="#" class="text-dark">Tus ordenes</a>
                  </p>
                  <p>
                    <a href="#" class="text-dark">Manejo de cuenta </a>
                </p>
                <p>
                  <a href="#" class="text-dark">Ayuda</a>
              </p>

                  </div>

                   <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Has dinero</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="#" class="text-dark">vende productos en nuestra sitio</a>
                    </p>
                    <p>
                      <a href="#" class="text-dark">Anuncios</a>
                  </p>
                  <p>
                    <a href="#" class="text-dark">Afiliate</a>
                </p>
                <p>
                  <a href="#" class="text-dark">Publica</a>
              </p>

                  </div>

                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contacto</h5>
                    <hr class="mb-4">
                    <p>
                        <li class="fas fa-home me-3">Colombia, Bogota
                    </p>
                    <p>
                      <li class="fas fa-envelope me-3">recuerdo@gmail.com
                  </p>
                  <p>
                    <li class="fas fa-phone me-3">57+555555
                </p>
                <p>
                  <li class="fas fa-print me-3">+5732055555
              </p>
                  </div>

                  <hr class="mb-4">
                  <div class="text-center mb-2">
                    <p> Copyright Todos los derechos reservados
                      <a href="#">
                        <strong class=" text-primary">Viviana Ramirez</strong>
                      </a>
                    </p>
                  </div>

                  <div class="text-center">
                    <ul class=" list-unstyled list-inline">

                      <li class="list-inline-item">
                        <a href="#" class="text-dark"><i class="fab fa-facebook"></i> </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="text-dark"><i class="fab fa-twitter"></i> </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="text-dark"><i class="fab fa-google-plus"></i> </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i> </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="text-dark"><i class="fab fa-youtube"></i> </a>
                      </li>
                    </ul>
                  </div>




                </div>
            </div>
      </footer>
</body>

<script src="boton_formulario.js"></script>
</html>