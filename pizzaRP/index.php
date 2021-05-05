<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->
        <title>
            Pizza Republica
        </title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/owl.carousel.css"/>
        <link rel="stylesheet" href="css/owl.theme.css"/>
        <link rel="stylesheet" href="css/animate.css"/>
        <link rel="stylesheet" href="css/flexslider.css"/>
        <link rel="stylesheet" href="css/pricing.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlsContainer: ".flexslider-container"
                });
            });
        </script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <!-- Navigation
            ==========================================-->
        <section class="contenido">
            <nav id="menu" class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <!-- Borrar si no se quiere trasparente-->
                        <div id="menu"  lign="center" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                            <div class="navbar-header">
                                <img style="display:block; margin:auto;" width="110" height="55" src="logo2.png"/>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <div align="center" class="hidden-xs" id="logo">
                                        <a href="#header">
                                        </a>
                                    </div>
                                </div>
                                <!-- /.navbar-collapse  -->
                            </div>
                            <!-- container  -->
                        </div>
                        <!-- menu  -->
                    </div>
                </nav>
                <!--********************************************************************************************************************-->
                <style type="text/css">
                  #pe {
                    border: 1px;
                  text-align: center;
                  color: #ffff;
                  background-color: transparent;



                }</style>
                <!-- Header -->
                <header id="header">
                    <div class="intro">
                        <div class="overlay">
                            <div class="container">
                                <div class="row">
                                    <div class="intro-text">
                                        <br/>
                                        <br/>
                                        <img width="100%" height="100%" src="images/menus/Entrada.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                     <?php include 'standard.php'; // Funciona. ?>
                    <!--********************************************************************************************************************-->
                    <script type="text/javascript">
                          function back(){
                            history.back();
                          }
                        </script>
                    <!--==  7. Afordable Pricing  ==-->
                    <section id="pricing" class="pricing">
                        <div id="w">
                            <div class="pricing-filter">
                                <div class="pricing-filter-wrapper">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <ul id="menu-pricing" class="menu-price gallery">
                                            <li class="item dinner gallery-item">
                                                <a>
                                                    <!--
                                                        ==  href="MenuIndividuales/menucompleto/index.html"  ==
                                                    -->
                                                    <img class="gallery-image" src="images/menus/menucompleto.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Menú Completo
                                                </h2>
                                            </li>
                                            <li class="item dinner gallery-item">
                                                <a href="MenuIndividuales/Entradas/index.php">
                                                    <!--
                                                        ==  href="MenuIndividuales/Entradas/index.html"  ==
                                                    -->
                                                    <img class="gallery-image" src="images/menus/Entradasmenu.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Entradas
                                                </h2>
                                            </li>
                                            <li class="item dinner gallery-item">
                                                <!--
                                                    ==   href="MenuIndividuales/Foccacias/index.html"  ==
                                                -->
                                                <a href="MenuIndividuales/Foccacias/index.php">
                                                    <img class="gallery-image" src="images/menus/Focaccia.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Foccacias
                                                </h2>
                                            </li>
                                            <li class="item dinner gallery-item">
                                                <a href="MenuIndividuales/Pizzas/index.php">
                                                    <img class="gallery-image" src="images/menus/Pizzas.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Pizzas
                                                </h2>
                                            </li>
                                            <li class="item dinner gallery-item">
                                                <!--
                                                    ==  href="MenuIndividuales/Pastas/index.html"  ==
                                                -->
                                                <a href="MenuIndividuales/Pastas/index.php">
                                                    <img class="gallery-image" src="images/menus/Pastas.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Pastas
                                                </h2>
                                            </li>
                                            <li class="item dinner gallery-item">
                                                <a  href="MenuIndividuales/Plato Fuerte/index.php">
                                                    <!--
                                                        ==   href="MenuIndividuales/Postre/index.html"g  ==
                                                    -->
                                                    <img class="gallery-image" src="images/menus/PlatosFuertes.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Plato Fuerte
                                                </h2>
                                            </li>
                                            <li class="item dinner gallery-item">
                                                <!--
                                                    ==  href="MenuIndividuales/menuNiño/index.html"  ==
                                                -->
                                                <a href="MenuIndividuales/Menú de Niños/index.php">
                                                    <img class="gallery-image" src="images/menus/Menu de niños.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Menú de Niños
                                                </h2>
                                            </li>
                                            <li class="item dinner gallery-item">
                                                <a  href="MenuIndividuales/Postres/index.php">
                                                    <!--
                                                        ==   href="MenuIndividuales/Postre/index.html"g  ==
                                                    -->
                                                    <img class="gallery-image" src="images/menus/Postres.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Postres
                                                </h2>
                                            </li>
                                            <li class="item dinner gallery-item">
                                                <a  href="MenuIndividuales/Alchol/index.php">
                                                    <!--
                                                        ==  7. Afordable Pricing  ==
                                                    -->
                                                    <img class="gallery-image" src="images/menus/Bebidasalcohol.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Bebidas Con Alcohol
                                                </h2>
                                            </li>
                                            <li class="item dinner gallery-item">
                                                <a  href="MenuIndividuales/sinAlchol/index.php">
                                                    <!--
                                                        ==  7. Afordable Pricing  ==
                                                    -->
                                                    <img class="gallery-image" src="images/menus/BebidasNOal.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Bebidas Sin Alcohol
                                                </h2>
                                            </li>
                                            <li class="item dinner gallery-item">
                                                <a href="#">
                                                    <!--
                                                        ==  7. Afordable Pricing  ==
                                                    -->
                                                    <img class="gallery-image" src="images/menus/Promos.jpg" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer"/>
                                                </a>
                                                <h2 class="white">
                                                    Promociones
                                                </h2>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                      <!-- ******************************************************************************************************************* -->
            <!-- BOTON FLOTANTE LLAMADAO DE CSS -->
            <link rel="stylesheet" type="text/css"  href="css/botonflotante.css"/>
            <!--BOTON QUE DESPLEGA EL MENU DE OPCIONES  -->
            <div class="flBtn flBtn-position-br flBtn-size-medium">
                <input type="checkbox"/>
                <a href="#" data-role="main">
                    <img style="text-align:center;  width: 55px; height: 50px;"   src="Iconos/Iconoshambuerguesa.svg"/>
                </i>
            </a>
            <ul class="flBtn-first">
                <div class="contenido">
                    <a href="index.php" id="botonEnviar" class="mostrarmodal" tooltip="Menú Completo">
                        <img width="30" style="text-align:center;"  src="Iconos/Iconomenu.svg"/>
                    </i>
                </a>
                <br/>
            </div>
            <div class="contenido">
                <a href="../touche-master/index.html" id="botonEnviar" class="mostrarmodal" tooltip="Menú Cruzado">
                    <img width="30"  style="text-align:center;" src="Iconos/Iconogastronomica.svg"/>
                </i>
            </a>
            <br/>
        </div>
        <div class="contenido">
            <a href="ingles/index.php" id="botonEnviar" class="mostrarmodal" tooltip="Traducir">
                <img width="30" style="text-align:center;"  src="Iconos/IconosTraductor.svg"/>
            </i>
        </a>
        <br/>
    </div>
</ul>
</div>
<div id="footer">
    <div class="container-fluid text-center copyrights">
        <div class="social">
            <ul>
                <p id="firstname" style="text-align: center; font-family: Major Mono Display">
                    Vía Gastronómica    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                     <a href="http://www.templatewire.com" rel="nofollow">
                    </a>
                </p>
                <li>
                    <a href="http://cityplacecr.com/">
                        <i>
                            <img width="100"  src="City place.png"/>
                        </i>
                    </a> &nbsp;&nbsp;&nbsp;

                    <a href="https://www.roccacr.com/">
                        <i>
                            <img  width="70"  src="rocca.png"/>
                        </i>
                    </a>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;
                </li>
            </ul>
            <ul>
                <p id="firstname2" style="text-align: center font-size:18px; font-family: Major Mono Display">
                    <a href="http://www.templatewire.com" rel="nofollow">
                    </a>
                </p>
                <li>
                    <a href="https://www.facebook.com/pizzarepublicacr">
                        <i class="fa fa-facebook">
                        </i>
                    </a> &nbsp;&nbsp;&nbsp;

                    <a href="https://www.instagram.com/pizza_republica/">
                        <i class="fa fa-instagram">
                        </i>
                    </a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
<script src="js/script.js"></script>
</body>
</html>
