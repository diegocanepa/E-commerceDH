<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <!-- Navigation -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="navbar-respon">
                 <a class="navbar-brand" href="#" id="navbar-brand">Beaver Builder</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" id="nav-li" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-li" href="#">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-li" href="#">Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-li-der-log" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-li-der" href="#">Registrarse</a>
                        </li>
                        <!-- <li><a class="nav-link" id="carrito-compras"><img src="resources/carrito-compras.png" alt=""></a></li> -->
                    </ul>
                    </div>
                </nav>

        <!-- Carousel -->

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" id="div-carrousel-img">
                    <img src="img/header-p1.jpg" class="d-block w-100" id="img-carr" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-carousel">Las mejores oportunidades</h5>
                        <p class="text-carousel">Precios tan esperados como el verano</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/header-p2.jpg" class="d-block w-100" id="img-carr" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-carousel">La mejor opcion para tu bolsillo</h5>
                        <p class="text-carousel">Grandes planes para la mejor financiacion</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/header-p3.jpg" class="d-block w-100" id="img-carr" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-carousel">¿Que estas esperando?</h5>
                        <p class="text-carousel">Comenza a remodelar eso que tanto querias</p>
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


        <!-- Servicios -->

        <section class="page-section-services" id="about-services">
        <h2 id="h2-services">Nuestros servicios</h2>
            <div class="container">
                <div class="row text-center">
                        <div class="col-md-4">
                            <div class="cont-service"><img class="img-section" src="img/shopping-cart.png" alt=""></div>
                            <h4 class="service-heading">E-Commerce</h4>
                            <p class="text-muted">Compra todo lo que necesites sin moverte de tu casa.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="cont-service"><img class="img-section" src="img/logistics-delivery-truck-in-movement.png" alt=""></div>
                            <h4 class="service-heading">Envío a domicilio</h4>
                            <p class="text-muted">¡Hace tu pedido que nosotros te lo enviamos sin cargo!.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="cont-service"> <img class="img-section" src="img/configuration.png" alt=""></div>
                            <h4 class="service-heading">Insatalacion y armado</h4>
                            <p class="text-muted">¡Nosotros lo hacemos por vos!<br/>¿Conocés todos nuestros servicios de instalación?</p>
                        </div>
                </div>
            </div>
        </section>
        <!-- About -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" id="history">
                    <h2 class="section-heading">NUESTRA HISTORIA</h2>
                    <h3 class="section-subheading text-muted">La calidad de nuestros servicios para su satisfacción es nuestro principal objetivo.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/equipo-de-trabajo.jpg" alt="falta imagen">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1980</h4>
                                    <h4 class="subheading">Nuestros comienzos</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/Empresa-.jpg" alt="falta imagen">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1998</h4>
                                    <h4 class="subheading">Nace una futura empresa</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/Empresa-responsable.jpg" alt="falta imagen">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2012</h4>
                                    <h4 class="subheading">La consolidacion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/Foto-construir-una-gran-empresa-6.png" alt="falta imagen">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2019</h4>
                                    <h4 class="subheading">Seguimos creciendo</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                            <h3>Hola</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, aperiam quia optio, quod ipsa similique eos deleniti sit inventore pariatur repellendus repudiandae voluptatum dolor quae nulla dolores. Perferendis, facilis. Quod.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                            <h2>Hola</h3>
                            <ul>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                            <h2>Seguinos</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit autem debitis, dolore tempore minima sunt culpa magnam enim perferendis sint error, illum repellat suscipit a animi fugiat ut nostrum soluta.</p>
                            <a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                            <h2>Ultimas Noticias</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, iusto explicabo veniam obcaecati, harum numquam velit officia deleniti, quas iure laudantium pariatur ullam! Voluptatem eligendi quo suscipit sunt alias expedita.</p>
                            <form action="">
                                <input type="email">
                                <input type="submit" value="suscribete">
                            </form>
                        </div>

                    </div>
                </div>
        </footer>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>