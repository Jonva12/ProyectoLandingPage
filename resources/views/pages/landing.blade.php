@extends('layouts.default')
@section('title','WCSearch Landing Page')
@section('content')
<div id="container">

        <!--Set your own slider options. Look at the v_RevolutionSlider() function in 'theme-core.js' file to see options-->
        <div class="home-slider-wrap fullwidthbanner-container" id="home">
            <div class="v-rev-slider" data-slider-options='{ "startheight": 700 }'>

                <ul>

                    <li data-transition="fade" data-slotamount="7" data-masterspeed="600">

                        <img src="img/slider/image2.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption v-caption-big-white sfl stl"
                            data-x="450"
                            data-y="245"
                            data-speed="600"
                            data-start="600"
                            data-easing="Power1.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0"
                            data-endelementdelay="0"
                            data-endspeed="300">
                            ENCUENTRA LOS ASEOS PUBLICOS
                            <br />
                            DE MANERA RAPIDA Y SENCILLA
                        </div>

                        <div class="tp-caption sfl stl"
                            data-x="110"
                            data-y="130"
                            data-speed="600"
                            data-start="1800"
                            data-easing="Power1.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0"
                            data-endelementdelay="0"
                            data-endspeed="300">
                            <!--<a href='#' class="btn v-btn v-third-light">GET IT NOW!</a>-->
                            <img src="img/iphone2.png" />
                        </div>



                        <!--<div class="v-slider-overlay overlay-colored"></div>-->
                    </li>
                </ul>
            </div>

            <div class="shadow-right"></div>
        </div>

        <div class="v-page-wrap no-bottom-spacing">

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-small"></div>
            </div>

            <!--Features-->
            <div class="container" id="features">

                <div class="row center">

                    <div class="col-sm-12">
                        <p class="v-smash-text-large-2x">
                            <span>Caracteristicas de la aplicacion</span>
                        </p>
                        <div class="horizontal-break"></div>
                        <p class="lead" style="color: #999;">
                            Responsive y optimizada para todo tipo de dispositivo.<br>
                        </p>
                    </div>
                    <div class="v-spacer col-sm-12 v-height-standard"></div>
                </div>

                  <div class="row features">
                      <div class="col-md-4 col-sm-4">
                          <div class="feature-box left-icon v-animation pull-top" data-animation="fade-from-left" data-delay="300">
                              <div class="feature-box-icon small">
                                  <i class="fa fa-laptop v-icon"></i>
                              </div>
                              <div class="feature-box-text">
                                  <h3>Super diseño!</h3>
                                  <div class="feature-box-text-inner">
                                      Diseño sencillo e intuitivo. Para un uso facil y rapido.
                                  </div>
                              </div>
                          </div>

                          <div class="v-spacer col-sm-12 v-height-standard"></div>

                          <div class="feature-box left-icon v-animation" data-animation="fade-from-left" data-delay="600">
                              <div class="feature-box-icon small">
                                  <i class="fa fa-vimeo-square v-icon"></i>
                              </div>
                              <div class="feature-box-text">
                                  <h3>Velocidad de la luz!</h3>
                                  <div class="feature-box-text-inner">
                                      Encuentra los aseos mas cercanos a tu ubicacion de manera rapida y facil.
                                  </div>
                              </div>
                          </div>

                          <div class="v-spacer col-sm-12 v-height-standard"></div>


                      </div>
                      <div class="col-md-4 col-sm-4">
                          <div class="feature-box left-icon v-animation pull-top" data-animation="fade-from-right" data-delay="300">
                              <div class="feature-box-icon small">
                                  <i class="fa fa-tablet v-icon"></i>
                              </div>
                              <div class="feature-box-text">
                                  <h3>Diseño web responsive!</h3>
                                  <div class="feature-box-text-inner">
                                      Diseño sencillo y responsive para que sea facil de acceder y utilizar desde cualquier dispositivo.
                                  </div>
                              </div>
                          </div>

                          <div class="v-spacer col-sm-12 v-height-standard"></div>

                          <div class="feature-box left-icon v-animation" data-animation="fade-from-right" data-delay="600">
                              <div class="feature-box-icon small">
                                  <i class="fa fa-lightbulb-o v-icon"></i>
                              </div>
                              <div class="feature-box-text">
                                  <h3>Estamos abiertos a sugerencias</h3>
                                  <div class="feature-box-text-inner">
                                      Enviadnos vuestras dudas y sugerencias mediante el formulario de contacto que se encuentra mas abajo.<br />
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="feature-box left-icon v-animation" data-animation="fade-from-left" data-delay="900">
                            <div class="feature-box-icon small">
                                <i class="fa fa-cloud-download v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Actualizaciones regulares y soporte.</h3>
                                <div class="feature-box-text-inner">
                                    Estamos comprometidos con ofrecer un servicio especial realizando actualizaciones periodicas y ofreciendo soporte mediante el formulario de contacto.
                                </div>
                            </div>
                        </div>

                          <div class="v-spacer col-sm-12 v-height-standard"></div>


                      </div>
                </div>

                    <!--<div class="col-md-4 col-sm-4">
                        <img class="img-responsive phone-image v-animation" data-animation="fade-from-bottom" data-delay="250" src="img/landing/single-iphone.png" />
                    </div>-->


                </div>
            </div>
            <!--End Features-->

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-standard"></div>
            </div>

            <!--Why Us-->
            <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="why-us">
                <div class="container">
                    <div class="row app-brief">
                        <div class="col-sm-6">
                            <img class="img-responsive phone-image v-animation" data-animation="fade-from-left" data-delay="250" src="img/landing/2-iphone-left.png" />
                        </div>

                        <div class="col-sm-6">
                            <p class="v-smash-text-large-2x pull-top">
                                <span>Quienes Somos</span>
                            </p>
                            <div class="horizontal-break left"></div>
                            <p class="v-lead">
                                Somos un grupo de tres estudiantes del grado superior de desarrollo de aplicaciones web. Esta aplicacion es para el proyecto de fin de grado. Nuestros nombres son Yaiza Muñoz, Jon Artola y Jon Valdes.
                            </p>

                            <div class="v-spacer col-sm-12 v-height-small"></div>

                            <ul class="v-list-v2">
                                <li class="v-animation" data-animation="fade-from-right" data-delay="150"><i class="fa fa-check"></i><span class="v-lead">Nuestro objetivo es ofrecer un servicio sencillo y facil de utilizar.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="300"><i class="fa fa-check"></i><span class="v-lead">Tambien aprobar el proyecto.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="450"><i class="fa fa-check"></i><span class="v-lead">Sobre todo aprobar el proyecto.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="600"><i class="fa fa-check"></i><span class="v-lead">Mas que nada por graduarnos y salir al mercado laboral.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="750"><i class="fa fa-check"></i><span class="v-lead">Que hay que ganarse la vida.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="900"><i class="fa fa-check"></i><span class="v-lead">Y si es mejor que los otros proyectos pues perfecto.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Why Us-->

            <!--Describe-->
            <div class="v-parallax v-bg-stylish" id="describe">
                <div class="container">
                    <div class="row app-brief">
                        <div class="col-sm-6">
                            <p class="v-smash-text-large-2x pull-top">
                                <span>Que ofrecemos</span>
                            </p>
                            <div class="horizontal-break left"></div>
                            <p class="v-lead">
                                Ofrecemos un servicio sencillo y facil de usar para que cualquiera pueda utilizar y entender. Para asi ayudar al usuario a encontrar aseos cercanos a su ubicacion en caso de necesidad, emergencia o curiosidad. Tambien ofrecemos un sistema mediante el cual los baños reciben valoraciones y opiniones para que el usuario pueda valorar y decidir a que baño ir, ademas de informacion detallada sobre horarios y accesibilidad.
                            </p>

                            <!--<p class="v-lead">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>-->
                        </div>

                        <div class="col-sm-6">
                            <img class="img-responsive phone-image v-animation" data-animation="fade-from-right" data-delay="300" src="img/landing/2-iphone-left.png" />
                        </div>
                    </div>
                </div>
            </div>
            <!--End Describe-->

            <!--Services-->
            <div class="v-parallax v-parallax-video v-bg-stylish" id="services" style="background-image: url(img/slider/slider4.jpg);">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="0">
                                <!--<div class="feature-box-icon small">
                                    <i class="fa fa-laptop v-icon"></i>
                                </div>-->
                                <div class="feature-box-text clearfix">
                                    <h3>Jonva12:</h3>
                                    <div class="feature-box-text-inner">
                                        <p>
                                            Muy buena aplicacion me salvo en un momento de apreton. 10/10.
                                        </p>

                                        <!--<a href="#" class="read-more">Read More</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="200">
                                <!--<div class="feature-box-icon small">
                                    <i class="fa fa-leaf v-icon"></i>
                                </div>-->
                                <div class="feature-box-text">
                                    <h3>Jerbo:</h3>
                                    <div class="feature-box-text-inner">
                                        <p>
                                            10/10 la aplicacion realmente util y facil de utilizar.<br />
                                        </p>
                                        <!--<a href="#" class="read-more">Read More</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="400">
                                <!--<div class="feature-box-icon small">
                                    <i class="fa fa-scissors v-icon"></i>
                                </div>-->
                                <div class="feature-box-text">
                                    <h3>ErBoy</h3>
                                    <div class="feature-box-text-inner">
                                        <p>
                                            Me salvo, menos mal que encontre un servicio rapido #asomalatortuga.<br />
                                        </p>
                                        <!--<a href="#" class="read-more">Read More</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="v-bg-overlay overlay-colored"></div>
                    </div>
                </div>
            </div>
            <!--End Services-->

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-big"></div>
            </div>

            <div class="container">
                <div class="row center v-counter-wrap">
                    <div class="col-sm-3">
                        <i class="fa fa-user v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="6218" data-speed="1000" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Usuarios activos</h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <i class="fa fa-map-marker v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="1448" data-speed="1500" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Aseos registrados</h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <i class="fa fa-laptop v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="2650" data-speed="2000" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Conexiones diarias</h6>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <i class="fa fa-comment-o v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="5265" data-speed="2500" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Comentarios recibidos</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-standard"></div>
            </div>

            <!--Screenshots-->
            <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="screenshots">
                <div class="container">
                    <div class="row center">
                        <div class="col-sm-12">
                            <p class="v-smash-text-large-2x">
                                <span>Imagenes de la aplicacion</span>
                            </p>
                            <div class="horizontal-break"></div>
                            <p class="lead" style="color: #999;">
                                Responsive y optimizada para todos los dispositivos.
                            </p>
                        </div>
                        <div class="v-spacer col-sm-12 v-height-standard"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="carousel-wrap">

                                <div class="owl-carousel" data-plugin-options='{"items": 4, "singleItem": false, "pagination": true}'>
                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/1.png" class="attachment-full">
                                            <a class="view" href="img/landing/1.png" rel="image-gallery"></a>
                                            <figcaption>
                          
                     <div class="thumb-info">
                                                    <h4>"Pantalla principal".</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/2.png" class="attachment-full">
                                            <a class="view" href="img/landing/2.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>"Pantalla de inicio de sesion".</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/3.jpg" class="attachment-full">
                                            <a class="view" href="img/landing/3.jpg" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>"Perfil de Usuario".</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/4.jpg" class="attachment-full">
                                            <a class="view" href="img/landing/4.jpg" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/1.jpg" class="attachment-full">
                                            <a class="view" href="img/landing/1.jpg" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="img/landing/2.jpg" class="attachment-full">
                                            <a class="view" href="img/landing/2.jpg" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Screenshots-->
            <!--Call Us-->
            <div class="v-parallax v-bg-stylish" id="contacto">
                <div class="container">
                    <div class="row center">
                        <div class="col-sm-8 col-sm-offset-2">
                            <p class="v-smash-text-large-2x">
                                <span>Llamanos!</span>
                            </p>
                            <br />
                            <p class="lead" style="color: #999;">
                                +943 12 12 12
                            </p>
                            <div class="horizontal-break"></div>

                            <div class="v-spacer col-sm-12 v-height-small"></div>



                            <form action="enviarConsulta" method="get">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>Tu Nombre<span class="required">*</span></label>
                                            <input type="text" value="" maxlength="100" class="form-control" name="nombre" id="name">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Tu Email<span class="required">*</span></label>
                                            <input type="email" value="" maxlength="100" class="form-control" name="email" id="email1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Comentario<span class="required">*</span></label>
                                            <textarea maxlength="5000" rows="10" class="form-control" name="comentario" id="Textarea1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <br />
                                        <button name="submit" type="submit" id="sendmesage" class="btn v-btn no-three-d">Enviar Consulta</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="row">
                        <div class="v-spacer col-sm-12 v-height-small"></div>
                    </div>
                </div>
            </div>
            <!--End Call Us-->
        </div>

    </div>

    <!--// BACK TO TOP //-->
@stop
