<?php 
require( './wp-load.php' );
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Quesos del sur de calidad. Sigue la marca de quesos curacautín, desde la vaca normanda directo a tu mesa.">
    <meta name="author" content="">

    <title>Quesos Curacautin - Un producto de calidad</title>
    <link rel="icon" type="image/png" href="img/logo.ico" />
    <link rel="shortcut icon" href="favicon.ico" type="img/logo.ico" />
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Analytics -->
    <script src="js/googleanalytics.js"></script>
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                  <img class="navbar-logo" src="img/quesos-curacautin-trans.png" alt="Quesos Curacauting Logo" >
                </a>
                <a class="navbar-brand brand-text" href="#page-top">Quesos Curacautin</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a class="page-scroll" href="#page-top">
                          <i class="fa fa-4x fa-home home-icon white-border sr-icons" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Quiénes somos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#products">Productos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#history">Historia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Equipo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#wp-contact-form">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
          <div class="header-content">
                  <h1>QUESOS CURACAUTIN</h1>
                  <hr>
                  <p>Ven y conoce nuestras exquisitas variedades de productos</p>
                  <div>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                  </div>
          </div>
    </header>
    <section class="bg-primary flat-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Conoce nuestra variedad de Quesos</h2>
                    <hr class="light">
                    <p class="text-faded">Producto único en el mercado, elaborado a partir de leche de vacas normandas, una raza de origen francés que posee características únicas para la producción de quesos.</p>
                    <a href="about.html" class="page-scroll btn btn-default btn-xl sr-button">SABER MÁS</a>
                </div>
            </div>
        </div>
    </section>
  <div id="events">
    <div id="carousel-container">
        <!-- Carousel -->
        <div id="carousel" class="carousel slide" style="position:relative;" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="img/events2.jpg" alt="...">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="img/events3.jpg" alt="...">
                  <div class="carousel-caption">
                  </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <div class="xs-header news-header">
              <p>Novedades</p>
            </div>
            <div class="md-display news-banner">
                <h2 class="text-center">Novedades</h2>
                <hr class="light">
                <ul>
                  <li>
                      <p class="news-description">Mantente al tanto de todas nuestras ferias y eventos gastronómicos</p>
                    </li>
                  <li>
                    <h3>Fiesta de la vendimia de Chile</h3>
                    <p>22 y el 26 de marzo en Curicó</p>
                  </li>
                  <li>
                      <h3>Feria “Arte y Sabores de La Araucanía”</h3>
                      <p>27 y 28 de Marzo en Angol</p>
                  </li>
                </ul>
                <a class="btn btn-primary btn-xl calendar-btn lg-bottom-fixed sr-button" href="events.html">VER CALENDARIO</a>
            </div>
          </div> <!-- end carousel -->
  </div> <!-- end carousel container -->
</div>

    <section id="products" class="products-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-center bolder">Formatos</h2>
                    <p class="text-ligther">Quesos de calidad en diferentes formatos</p>
                </div>
            </div>
        </div>

        <div class="container-fluid presentations">
            <div class="row">
                <div class="col-lg-6 col-md-6 presentation-box">
                    <h3>Quesos Maduros y Añejos</h3>
                    <div class="row">
                          <div class="col-xs-12 col-md-8 col-lg-8 presentation-img-container">
                              <img src="img/productos1.jpg" class="img-responsive img-circle" alt="">
                              <div class="img-btn">
                                  <a class="page-scroll btn btn-primary btn-xl sr-button" href="products.html#maduros">Ver Detalles</a>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-4 col-lg-4">
                            <p class="text-muted">Vendemos quesos de maduración media, los que poseen de uno a 2 meses de maduración.</p>
                            <p>Quesos de maduración prolongada 4 a 6 meses.</p>
                          </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 presentation-box">
                    <h3>Quesos Condimentados con Orégano</h3>
                      <div class="row">
                            <div class="col-xs-12 col-md-8 col-lg-8 presentation-img-container">
                                <img src="img/oregano.jpg" class="img-responsive img-circle" alt="">
                                <div class="img-btn">
                                    <a class="page-scroll btn btn-primary btn-xl sr-button" href="products.html#oregano">Ver Detalles</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 col-lg-4">
                              <p class="text-muted">Vendemos quesos maduros condimentados con oréganos, especie propia del sur de Chile</p>
                            </div>
                      </div>
                </div>
                <div class="col-lg-6 col-md-6 presentation-box">
                    <h3>Quesos Condimentados con Merken</h3>
                    <div class="row">
                          <div class="col-xs-12 col-md-8 col-lg-8 presentation-img-container">
                              <img src="img/merken.jpg" class="img-responsive img-circle" alt="">
                              <div class="img-btn">
                                  <a class="page-scroll btn btn-primary btn-xl sr-button" href="products.html#merken">Ver Detalles</a>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-4 col-lg-4">
                            <p class="text-muted">Vendemos quesos maduros condimentados con Merken, especie originaria de la Araucanía</p>
                          </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 presentation-box">
                    <h3>Tablas Mixtas</h3>
                    <div class="row">
                          <div class="col-xs-12 col-md-8 col-lg-8 presentation-img-container">
                              <img src="img/productos2.jpg" class="img-responsive img-circle" alt="">
                              <div class="img-btn">
                                  <a class="page-scroll btn btn-primary btn-xl sr-button" href="products.html#tablas-mixtas">Ver Detalles</a>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-4 col-lg-4">
                            <p class="text-muted"> Vendemos tablas de quesos, las cuales combinan todas nuestras variedades (quesos con orégano, quesos con merken, quesos de maduración media, y quesos de maduración prolongada) todo en un solo producto</p>
                          </div>
                    </div>
                </div>
            </div>
            <p>Todos nuestros productos y variedades las puedes encontrar en diferentes formatos y tamaños, ajustados a las necesidades de nuestros clientes.</p>
        </div>
    </section>

    <section class="bg-primary history-section flat-section" id="history">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <i class="fa fa-4x fa-graduation-cap sr-icons"></i>
                    <h2 class="section-heading">Conoce nuestra Historia</h2>
                    <hr class="light">
                    <p class="text-faded">Entérate acerca de nuestros orígenes en las remotas tierras de Curacautin y de cómo llegamos a producir unos de los mejores quesos del país</p>
                    <a href="history.html" class="page-scroll btn btn-default btn-xl sr-button">SABER MÁS</a>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="bg-light-gray team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading bolder">Nuestro Equipo</h2>
                    <p class="section-subheading text-muted">Conoce el talento detrás de Quesos Curacautín</p>
                </div>
            </div>
            <div class="team-member text-center">
                <!-- inline style due to bootstrap overrides @img-responsive -->
                <img src="img/team/maria-gloria.jpg" class="img-responsive img-circle" style="max-width:30%;margin:0 auto;" alt="">
                <h4><strong>Maria Gloria</strong></h4>
                <p class="text-muted">Fundadora Quesos Curacautin</p>
                <ul class="list-inline social-buttons">
                    <li><a href="https://www.youtube.com/channel/UCrbGXJuXqcrXr-gq6ukyHhg" target="_blank"><i class="fa fa-youtube sr-button"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCrbGXJuXqcrXr-gq6ukyHhg" target="_blank"><i class="fa fa-facebook sr-button"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/quesos.curacautin.5" target="_blank"><i class="fa fa-linkedin sr-button"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>	
	<!-- Contact Form -->
	<div id="wp-contact-form" class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="contact-form/images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Contáctanos
				</span>

				<div class="wrap-input100 validate-input" data-validate = "Se requiere un Email válido: ej@abc.xyz">
					<label class="label-input100" for="email">
						<img src="contact-form/images/icons/symbol-01.png" alt="SYMBOL-MAIL">
					</label>
					<input id="email" class="input100" type="text" name="email" placeholder="(*) Ingrese su Email">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100">
					<label class="label-input100" for="telephone">
						<img src="contact-form/images/icons/tel-icon.png" alt="SYMBOL-TELF">
					</label>
					<input id="telephone" class="input100" type="text" name="telephone" placeholder="Ingrese un número de contacto">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "El mensaje ingresado está vacío">
					<textarea class="input100" id="message" name="message" placeholder="(*) Comunícanos tu solicitud, consulta o comentario!"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button type="submit" id="send_email" name="send_email" class="contact100-form-btn">
						Enviar mensaje
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	<div id="email-result"></div>
	
    <footer id="contact">
        <div class="container footer">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-lg-3 col-md-3">
                  <div>
                      <h3>Conócenos</h3>
                      <hr>
                      <ul>
                        <li><a href="about.html">Quiénes Somos</a></li>
                        <li><a href="events.html">Eventos</a></li>
                        <li><a href="products.html">Productos</a></li>
                        <li><a href="history.html">Historia</a></li>
                        <li><a href="#team">Equipo</a></li>
                        <li><a href="#">Galería</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-3 col-md-3">
                  <div>
                      <h3>Síguenos</h3>
                      <hr>
                      <ul>
                        <li>
                            <a href="https://www.youtube.com/channel/UCrbGXJuXqcrXr-gq6ukyHhg" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.youtube.com/channel/UCrbGXJuXqcrXr-gq6ukyHhg" target="_blank">Youtube</a>
                        </li>
                        <li>
                          <a href="https://www.facebook.com/quesos.curacautin.5" target="_blank"><i class="fa fa-facebook"></i></a>
                          <a href="https://www.facebook.com/quesos.curacautin.5" target="_blank">Facebook</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a>Twitter</a>
                        </li>
                      </ul>
                  </div>
              </div><!-- Add the extra clearfix for only the required viewport -->
              <div class="clearfix visible-xs-block"></div>
              <div class="clearfix visible-sm-block"></div>
              <div class="col-xs-12 col-sm-6 col-lg-3 col-md-3">
                  <div>
                      <h3>Contáctanos</h3>
                      <hr>
                      <ul class="contact-list">
                        <li>
                            <ul class="phone-list">
                                <li>
                                    <a href="#"><i class="fa fa-phone"></i></a>
                                    <a>+56 9 9067 0446</a>
                                </li>
                                <li>
                                    <a class="number">&nbsp+56 9 9157 9162</a>
                                </li>
                                <li>
                                    <a class="number">&nbsp+56 9 7937 3783</a>
                                </li>
                            </ul>
                            <br>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope"></i></a>
                            <a class="mail">gmariamardones@gmail.com</a>
                        </li>
                      </ul>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-3 col-md-3">
                  <div>
                      <h3>Dónde Encontrarnos</h3>
                      <hr>
                      <ul class="contact-list">
                        <li>
                          <a href="https://www.google.com/maps/place/Quesos+Curacautin/@-38.4811718,-72.0310826,17z/data=!3m1!4b1!4m5!3m4!1s0x966b56bc09a31877:0xea0af087c6cedab6!8m2!3d-38.481176!4d-72.0288939?hl=es-CL" target="_blank">
                            <img src="img/gmaps.png" class="gmaps-icon" alt="Quesos Curacautin Location"></a>
                          <a href="https://www.google.com/maps/place/Quesos+Curacautin/@-38.4811718,-72.0310826,17z/data=!3m1!4b1!4m5!3m4!1s0x966b56bc09a31877:0xea0af087c6cedab6!8m2!3d-38.481176!4d-72.0288939?hl=es-CL" target="_blank">
                            Curacautín, 14 Santa Emma. Km 15 Curacautín Lautaro</a>
                        </li>
                        <li class="clear-floats">
                            <a href="events.html"><i class="fa fa-calendar"></i></a>
                            <a href="events.html">Calendario de Eventos</a>
                        </li>
                      </ul>
                  </div>
              </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
	
	
	<!-- Contact Form JavaScript -->
	<!--===============================================================================================-->
	<script src="contact-form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="contact-form/vendor/bootstrap/js/popper.js"></script>
	<!--===============================================================================================-->
	<script src="contact-form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="contact-form/vendor/daterangepicker/moment.min.js"></script>
	<script src="contact-form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="contact-form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="contact-form/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="contact-form/js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>

</html>
