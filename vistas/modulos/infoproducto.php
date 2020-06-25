<?php

$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();

?>

<!--=====================================
 BREADCRUMB INFOPRODUCTOS
======================================-->

<div class="container-fluid well well-sm">

    <div class="container">
    
        <div class="row">
        
            <ul class="breadcrumb fondoBreadcrumb text-uppercase">
            
                <li><a href="<?php echo $url; ?>">INICIO</a></li>
                <li class="active pagActiva"><?php echo $rutas[0]; ?></li>

            </ul>
        
        </div>

    </div>

</div>

<!--=====================================
 INFOPRODUCTOS
======================================-->

<div class="container-fluid infoproducto">

    <div class="container">
    
        <div class="row">

            <?php

                $item = "ruta";
                $valor = $rutas[0];
                $infoproducto = ControladorProductos::ctrMostrarInfoProducto($item, $valor);

                /*=============================================
                 VISOR DE IMÁGENES
                =============================================*/

                if($infoproducto["tipo"] == "fisico"){

                    echo '<div class="col-md-5 col-sm-6 col-xs-12 visorImg">
            
                            <figure class="visor">
                            
                                <img id="lupa1" class="img-thumbnail" src="http://localhost/backend-ecommerce-curso/vistas/img/multimedia/tennis-verde/img-01.jpg" 
                                alt="tennis verde 11">
            
                                <img id="lupa2" class="img-thumbnail" src="http://localhost/backend-ecommerce-curso/vistas/img/multimedia/tennis-verde/img-02.jpg" 
                                alt="tennis verde 11">
            
                                <img id="lupa3" class="img-thumbnail" src="http://localhost/backend-ecommerce-curso/vistas/img/multimedia/tennis-verde/img-03.jpg" 
                                alt="tennis verde 11">
            
                                <img id="lupa4" class="img-thumbnail" src="http://localhost/backend-ecommerce-curso/vistas/img/multimedia/tennis-verde/img-04.jpg" 
                                alt="tennis verde 11">
            
                                <img id="lupa5" class="img-thumbnail" src="http://localhost/backend-ecommerce-curso/vistas/img/multimedia/tennis-verde/img-05.jpg" 
                                alt="tennis verde 11">
            
                            </figure>
            
                            <div class="flexslider">
            
                                <ul class="slides">
            
                                    <li>
                                        <img value="1" class="img-thumbnail" src="http://localhost/backend-ecommerce-curso/vistas/img/multimedia/tennis-verde/img-01.jpg" 
                                        alt="tennis verde 11">
                                    </li>
                                    <li>
                                        <img value="2" class="img-thumbnail" src="http://localhost/backend-ecommerce-curso/vistas/img/multimedia/tennis-verde/img-02.jpg" 
                                        alt="tennis verde 11">
                                    </li>
                                    <li>
                                        <img value="3" class="img-thumbnail" src="http://localhost/backend-ecommerce-curso/vistas/img/multimedia/tennis-verde/img-03.jpg" 
                                        alt="tennis verde 11">
                                    </li>
                                    <li>
                                        <img value="4" class="img-thumbnail" src="http://localhost/backend-ecommerce-curso/vistas/img/multimedia/tennis-verde/img-04.jpg" 
                                        alt="tennis verde 11">
                                    </li>
            
                                    <li>
                                        <img value="5" class="img-thumbnail" src="http://localhost/backend-ecommerce-curso/vistas/img/multimedia/tennis-verde/img-05.jpg" 
                                        alt="tennis verde 11">
                                    </li>
                                    
                                </ul>
            
                            </div>
            
                        </div>';    

                } else {

                    /*=============================================
                     VISOR DE VIDEO
                    =============================================*/

                    echo '<div class="col-sm-6 col-xs-12">
                    
                            <iframe class="videoPresentacion" src="https://www.youtube.com/embed/N4aY6yX-MaM?rel=0&autoplay=0" width="100%" 
                            frameborder="0" allowfullscreen></iframe>
                    
                        </div>';

                }

            ?>

            <!--=====================================
             PRODUCTO
            ======================================-->

            <?php

                if($infoproducto["tipo"] == "fisico"){

                    echo '<div class="col-md-7 col-sm-6 col-xs-12">';

                } else {

                    echo '<div class=" col-sm-6 col-xs-12">';

                }

            ?>

            

                <!--=====================================
                 REGRESAR A LA TIENDA
                ======================================-->

                <div class="col-xs-6">

                    <h6>

                        <a href="javascript:history.back()" class="text-muted">

                            <i class="fa fa-reply"></i> Continuar Comprando

                        </a>

                    </h6>

                </div>

                <!--=====================================
                 COMPARTIR EN REDES SOCIALES
                ======================================-->

                <div class="col-xs-6">

                    <h6>

                        <a class="dropdown-toggle pull-right text-muted" data-toggle="dropdown" href="#">

                            <i class="fa fa-plus"></i> Compartir

                        </a>

                        <ul class="dropdown-menu pull-right compartirRedes">

                            <li>
                                <p class="btnFacebook">
                                    <i class="fa fa-facebook"></i>
                                    Facebook
                                </p>
                            </li>

                            <li>
                                <p class="btnGoogle">
                                    <i class="fa fa-google"></i>
                                    Google
                                </p>
                            </li>

                        </ul>

                    </h6>

                </div>

                <div class="clearfix"></div>

                <!--=====================================
                ESPACIO PARA EL PRODUCTO
                ======================================-->

                <?php

                    /*=============================================
                     TITULO
                    =============================================*/
                    
                    if($infoproducto["oferta"] == 0) {

                        if($infoproducto["nuevo"] == 0){

                            echo '<h1 class="text-muted text-uppercase">'.$infoproducto["titulo"].'</h1>';

                        } else {

                            echo '<h1 class="text-muted text-uppercase">'.$infoproducto["titulo"].'

                            <br>

                            <small>
                    
                                <span class="label label-warning">Nuevo</span>
                        
                            </small>
                            
                            </h1>';

                        }

                    } else {

                        if($infoproducto["nuevo"] == 0) {

                            echo '<h1 class="text-muted text-uppercase">'.$infoproducto["titulo"].'
                            
                            <br>
                        
                            <small>
                        
                                <span class="label label-warning">'.$infoproducto["descuentoOferta"].'% off</span>
                            
                            </small>

                            </h1>';

                        } else {

                            echo '<h1 class="text-muted text-uppercase">'.$infoproducto["titulo"].'
                            
                            <br>
                        
                            <small>
                        
                                <span class="label label-warning">Nuevo</span>
                                <span class="label label-warning">'.$infoproducto["descuentoOferta"].'% off</span>
                                
                            </small>

                            </h1>';

                        }

                    }

                    /*=============================================
                     TITULO
                    =============================================*/

                    if($infoproducto["precio"] == 0) {

                        echo '<h2 class="text-muted">GRATIS</h2>';

                    } else {

                        if($infoproducto["oferta"] == 0) {

                            echo '<h2 class="text-muted">USD $'.$infoproducto["precio"].'</h2>';

                        } else {

                            echo '<h2 class="text-muted">

                                <span>
                                
                                    <strong class="oferta">USD $'.$infoproducto["precio"].'</strong>
                                
                                </span>

                                <span>
                                
                                    $'.$infoproducto["precioOferta"].'
                                
                                </span>
                            
                            </h2>';

                        }

                    }

                    /*=============================================
                     DESCRIPCIÓN
                    =============================================*/

                    echo '<p>'.$infoproducto["descripcion"].'</p>';

                ?>

                <!--=====================================
                CARACTERÍSTICAS DEL PRODUCTO
                ======================================-->

                <hr>

                <div class="form-group row">

                <?php

                    if($infoproducto["detalles"] != null) {

                        $detalles = json_decode($infoproducto["detalles"], true);

                        if($infoproducto["tipo"] == "fisico") {

                            if($detalles["Talla"] != null) {

                                echo '<div class="col-md-3 col-xs-12">
                                
                                    <select class="form-control seleccionarDetalle" id="seleccionarTalla">
                                    
                                        <option value="">Talla</option>';

                                        for ($i = 0; $i <= count($detalles["Talla"]); $i++) { 
                                            
                                            echo '<option value="'.$detalles["Talla"][$i].'">'.$detalles["Talla"][$i].'</option>';

                                        }

                                    echo '</select>
                                
                                </div>';

                            }

                            if($detalles["Color"] != null) {

                                echo '<div class="col-md-3 col-xs-12">
                                
                                    <select class="form-control seleccionarDetalle" id="seleccionarColor">
                                    
                                        <option value="">Color</option>';

                                        for ($i = 0; $i <= count($detalles["Color"]); $i++) { 
                                            
                                            echo '<option value="'.$detalles["Color"][$i].'">'.$detalles["Color"][$i].'</option>';

                                        }

                                    echo '</select>
                                
                                </div>';

                            }

                            if($detalles["Marca"] != null) {

                                echo '<div class="col-md-3 col-xs-12">
                                
                                    <select class="form-control seleccionarDetalle" id="seleccionarMarca">
                                    
                                        <option value="">Marca</option>';

                                        for ($i = 0; $i <= count($detalles["Marca"]); $i++) { 
                                            
                                            echo '<option value="'.$detalles["Marca"][$i].'">'.$detalles["Marca"][$i].'</option>';

                                        }

                                    echo '</select>
                                
                                </div>';

                            }

                        } else {

                            echo '<div class="col-xs-12">

                                <li>
                                    <i style="margin-right:10px" class="fa fa-play-circle"></i> '.$detalles["Clases"].'
                                </li>
                                <li>
                                    <i style="margin-right:10px" class="fa fa-clock-o"></i> '.$detalles["Tiempo"].'
                                </li>
                                <li>
                                    <i style="margin-right:10px" class="fa fa-check-circle"></i> '.$detalles["Nivel"].'
                                </li>
                                <li>
                                    <i style="margin-right:10px" class="fa fa-info-circle"></i> '.$detalles["Acceso"].'
                                </li>
                                <li>
                                    <i style="margin-right:10px" class="fa fa-desktop"></i> '.$detalles["Dispositivo"].'
                                </li>
                                <li>
                                    <i style="margin-right:10px" class="fa fa-trophy"></i> '.$detalles["Certificado"].'
                                </li>
                            
                            
                            </div>';

                        }

                    }

                    /*=============================================
                     ENTREGA
                    =============================================*/

                    if($infoproducto["entrega"] == 0) {

                        if($infoproducto["precio"] == 0) {

                            echo '<h4 class="col-md-12 col-sm-0 col-xs-0">
                        
                                <hr>

                                <span class="label label-default" style="font-weight:100">
                                
                                    <i class="fa fa-clock-o" style="margin-right:5px"></i>
                                    Entrega inmediata |
                                    <i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
                                    '.$infoproducto["ventasGratis"].' inscritos |
                                    <i class="fa fa-eye" style="margin:0px 5px"></i>
                                    Visto por '.$infoproducto["vistasGratis"].' personas

                                </span>

                            </h4>
                            
                            <h4 class="col-lg-0 col-md-0 col-xs-12">
                        
                                <hr>

                                <small>
                                
                                    <i class="fa fa-clock-o" style="margin-right:5px"></i>
                                    Entrega inmediata <br>
                                    <i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
                                    '.$infoproducto["ventasGratis"].' inscritos <br>
                                    <i class="fa fa-eye" style="margin:0px 5px"></i>
                                    Visto por '.$infoproducto["vistasGratis"].' personas

                                </small>

                            </h4>';

                        } else {

                            echo '<h4 class="col-md-12 col-sm-0 col-xs-0">
                        
                                <hr>

                                <span class="label label-default" style="font-weight:100">
                                
                                    <i class="fa fa-clock-o" style="margin-right:5px"></i>
                                    Entrega inmediata |
                                    <i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
                                    '.$infoproducto["ventas"].' ventas |
                                    <i class="fa fa-eye" style="margin:0px 5px"></i>
                                    Visto por '.$infoproducto["vistas"].' personas

                                </span>

                            </h4>
                            
                            <h4 class="col-lg-0 col-md-0 col-xs-12">
                        
                                <hr>

                                <small>
                                
                                    <i class="fa fa-clock-o" style="margin-right:5px"></i>
                                    Entrega inmediata <br>
                                    <i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
                                    '.$infoproducto["ventas"].' ventas <br>
                                    <i class="fa fa-eye" style="margin:0px 5px"></i>
                                    Visto por '.$infoproducto["vistas"].' personas

                                </small>

                            </h4>';

                        }

                    } else {

                        if($infoproducto["precio"] == 0) {

                            echo '<h4 class="col-md-12 col-sm-0 col-xs-0">
                            
                                <hr>

                                <span class="label label-default" style="font-weight:100">
                                
                                    <i class="fa fa-clock-o" style="margin-right:5px"></i>
                                    '.$infoproducto["entrega"].' días hábiles para la entrega |
                                    <i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
                                    '.$infoproducto["ventasGratis"].' solicitudes |
                                    <i class="fa fa-eye" style="margin:0px 5px"></i>
                                    Visto por '.$infoproducto["vistasGratis"].' personas

                                </span>

                            </h4>
                            
                            <h4 class="col-lg-0 col-md-0 col-xs-12">
                            
                                <hr>

                                <small>
                                
                                    <i class="fa fa-clock-o" style="margin-right:5px"></i>
                                    '.$infoproducto["entrega"].' días hábiles para la entrega <br>
                                    <i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
                                    '.$infoproducto["ventasGratis"].' solicitudes <br>
                                    <i class="fa fa-eye" style="margin:0px 5px"></i>
                                    Visto por '.$infoproducto["vistasGratis"].' personas 

                                </small>

                            </h4>';

                        } else {

                            echo '<h4 class="col-md-12 col-sm-0 col-xs-0">
                            
                                <hr>

                                <span class="label label-default" style="font-weight:100">
                                
                                    <i class="fa fa-clock-o" style="margin-right:5px"></i>
                                    '.$infoproducto["entrega"].' días hábiles para la entrega |
                                    <i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
                                    '.$infoproducto["ventas"].' ventas |
                                    <i class="fa fa-eye" style="margin:0px 5px"></i>
                                    Visto por '.$infoproducto["vistas"].' personas

                                </span>

                            </h4>
                            
                            <h4 class="col-lg-0 col-md-0 col-xs-12">
                            
                                <hr>

                                <small>
                                
                                    <i class="fa fa-clock-o" style="margin-right:5px"></i>
                                    '.$infoproducto["entrega"].' días hábiles para la entrega <br>
                                    <i class="fa fa-shopping-cart" style="margin:0px 5px"></i>
                                    '.$infoproducto["ventas"].' ventas <br>
                                    <i class="fa fa-eye" style="margin:0px 5px"></i>
                                    Visto por '.$infoproducto["vistas"].' personas

                                </small>

                            </h4>';

                        }

                    }

                ?>

                </div>

                <!--=====================================
                 BOTONES DE COMPRA
                ======================================-->

                <div class="row botonesCompra">

                <?php

                    if($infoproducto["precio"] == 0) {

                        echo '<div class="col-md-6 col-xs-12">';

                            if($infoproducto["tipo"] == "virtual") {

                                echo'<button class="btn btn-default btn-block btn-lg backColor">ACCEDER AHORA</button>';

                            } else {

                                echo'<button class="btn btn-default btn-block btn-lg backColor">SOLICITAR AHORA</button>';

                            }
                            
                            echo '</div>';

                    } else {

                        if($infoproducto["tipo"] == "virtual") {


                            echo '<div class="col-md-6 col-xs-12">

                                    <button class="btn btn-default btn-block btn-lg">
                                    <small>COMPRAR AHORA</small></button>
                                
                                </div>

                                <div class="col-md-6 col-xs-12">

                                    <button class="btn btn-default btn-block btn-lg backColor">
                                    <small>ADICIONAR AL CARRITO</small> 
                                    <i class="fa fa-shopping-cart col-md-0"></i></button>
                                
                                </div>';

                        } else {

                            echo '<div class="col-lg-6 col-md-8 col-xs-12">

                                    <button class="btn btn-default btn-block btn-lg backColor">
                                    
                                    ADICIONAR AL CARRITO 

                                    <i class="fa fa-shopping-cart"></i>
                                    
                                    </button>
                                
                                </div>';

                        }

                    }

                ?>

                </div>

                <!--=====================================
                ZONA LUPA
                ======================================-->

                <figure class="lupa">

                    <img src="">

                </figure>

            </div>
        
        </div>
    
    </div>

</div>
