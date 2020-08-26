@extends("front_layout.main")
@include("front_layout.header-v1")
@section("body")
<div class="space-50"> </div>
<section id="section-bazar" class="container">

    <div class="row">
        <div class="col-md-4"> 
            <div class="text-left col-md-12 no-padding circle-img" data-aos="fade-right">
                <h1 class="color-pink no-margin-top weight-900">Explora</h1>
                <div class="slide-banner slider">
                    <div class="item">
                          <a href="{{url('/')}}/bazar-digital"><img class="img-responsive grayscale overlay_" src="{{ asset('layout/assets/img/home/banner-bazar.gif?format=webp&quality=auto') }}" width="480" alt="CEO 2020"></a>
                    </div>
                    <div class="item">
                          <a href="{{url('/')}}/herramientas-emprender"><img class="img-responsive grayscale overlay_" src="{{ asset('layout/assets/img/home/CEO_Banner_Aprende.jpg?format=webp&quality=auto') }}" width="480" alt="CEO 2020"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8"> 
             <div class="text-left tab-agenda">

                <h1 class="color-pink no-margin-top margin-top-mobile-50 weight-900">Agenda</h1>

                <div class="space-10"> </div>
                <div class="space-20 block-mobile"> </div>

                  <div class="nav-tabs-responsive">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item nav-uno">
                        <a class="nav-link" id="primero-tab" data-toggle="tab" href="#primero" role="tab" aria-controls="primero"
                          aria-selected="true">24 agosto</a>
                      </li>
                      <li class="nav-item nav-dos">
                        <a class="nav-link" id="segundo-tab" data-toggle="tab" href="#segundo" role="tab" aria-controls="segundo"
                          aria-selected="false">25 agosto</a>
                      </li>
                      <li class="nav-item nav-tres">
                        <a class="nav-link" id="tercero-tab" data-toggle="tab" href="#tercero" role="tab" aria-controls="tercero"
                          aria-selected="false">26 agosto</a>
                      </li>
                      <li class="nav-item nav-cuatro">
                        <a class="nav-link" id="cuarto-tab" data-toggle="tab" href="#cuarto" role="tab" aria-controls="cuarto"
                          aria-selected="false">27 agosto</a>
                      </li>
                      <li class="nav-item nav-cinco">
                        <a class="nav-link" id="quinto-tab" data-toggle="tab" href="#quinto" role="tab" aria-controls="quinto"
                          aria-selected="false">28 agosto</a>
                      </li>
                    </ul>
                  </div>


                  <div class="agenda-ceo">
                  <div class="grid-container-agenda color-white fluid">
                  
                  <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade" id="primero" role="tabpanel" aria-labelledby="primero-tab">
                      <div class="grid-x align-middle">
                        <div class="medium-2 cell">
                          <div class="horario">18:00 - 19:00</div>
                        </div>
                        <div class="medium-10 cell">
                          <a href="{{url('/')}}/paneles">
                          <div data-equalizer-watch="" class="conferencia digital-talk" style="height: auto;">
                            <p>Zoom</p>
                            <h4>Panel: Emprendimiento colaborativo para un nuevo futuro</h4>
                            <p class="conferencista">Itzel Villa - Posible Coop</p>
                            <p class="conferencista">Carlos Pérez - IKEA</p>
                            <p class="conferencista">Greta Spota - WWF</p>
                            <p class="conferencista">Blanca Sánchez - Mbis Bin</p>
                          </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="segundo" role="tabpanel" aria-labelledby="segundo-tab"> 
                        <div class="grid-x align-middle">
                          <div class="medium-2 cell">
                            <div class="horario">18:00 - 19:00</div>
                          </div>
                          <div class="medium-10 cell">
                            <a href="{{url('/')}}/paneles">
                            <div data-equalizer-watch="" class="conferencia digital-talk" style="height: auto;">
                              <p>Zoom</p>
                              <h4>Panel: Emprendimientos desde las industrias creativas</h4>
                              <p class="conferencista">Mario Romero - Impact Hub CDMX</p>
                              <p class="conferencista">Martha Jiménez - Blancos & Bancos</p>
                              <p class="conferencista">Gabriel Reyes - Vixi México</p>
                              <p class="conferencista">Raquel Aguirre - La Cana</p>
                            </div>
                            </a>
                          </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tercero" role="tabpanel" aria-labelledby="tercero-tab"> 
                        <div class="grid-x align-middle">
                          <div class="medium-2 cell">
                            <div class="horario">16:00 - 17:00</div>
                          </div>
                          <div class="medium-10 cell">
                            <a href="{{url('/')}}/paneles">
                            <div data-equalizer-watch="" class="conferencia digital-talk" style="height: auto;">
                              <p>Zoom</p>
                              <h4>Panel: Inversión de impacto para lograr desarrollo sostenible</h4>
                              <p class="conferencista">Ernesto Herrera - Reforestamos México</p>
                              <p class="conferencista">Vanessa González - Fomento Social Citibanamex</p>
                              <p class="conferencista">Laura Ortiz- SVX</p>
                              <p class="conferencista">María Inés Miranda - Fair Connection</p>
                            </div>
                            </a>
                          </div>
                        </div>
                        <div class="grid-x align-middle">
                          <div class="medium-2 cell">
                            <div class="horario">18:00 - 19:00</div>
                          </div>
                          <div class="medium-10 cell">
                            <a href="{{url('/')}}/paneles">
                            <div data-equalizer-watch="" class="conferencia digital-talk" style="height: auto;">
                              <p>Zoom</p>
                              <h4>Panel: Redefiniendo la ruta del Emprendedor Social</h4>
                              <p class="conferencista">Juan Carlos Díaz Bilbao - PSM</p>
                              <p class="conferencista">Germán Santillán - Oaxacanita</p>
                              <p class="conferencista">Aída Chávez - Hola Code</p>
                              <p class="conferencista">Enrique Rodríguez- Someone Somewhere</p>
                            </div>
                            </a>
                          </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cuarto" role="tabpanel" aria-labelledby="cuarto-tab">
                        <div class="grid-x align-middle">
                          <div class="medium-2 cell">
                            <div class="horario">10:00 - 11:00</div>
                          </div>
                          <div class="medium-10 cell">
                            <a href="https://www.youtube.com/channel/UCTyKrM5aXG1iPI1OhG4j3sQ" target="_blank" rel="noreferrer">
                            <div data-equalizer-watch="" class="conferencia digital-talk" style="height: auto;">
                              <p>YouTube</p>
                              <h4>Comercio electrónico, motor de recuperación económica</h4>
                              <p class="conferencista">David Geisen - Mercado Libre</p>
                            </div>
                            </a>
                          </div>
                        </div>
                        <div class="grid-x align-middle">
                          <div class="medium-2 cell">
                            <div class="horario">12:30 - 13:30</div>
                          </div>
                          <div class="medium-10 cell">
                            <a href="https://www.youtube.com/channel/UCTyKrM5aXG1iPI1OhG4j3sQ" target="_blank" rel="noreferrer">
                            <div data-equalizer-watch="" class="conferencia digital-talk" style="height: auto;">
                              <p>YouTube</p>
                              <h4>El usuario 🐭 de tu producto no eres tú 🙀</h4>
                              <p class="conferencista">Victor Tavares / Arturo Robles Maloof | Citibanamex</p>
                            </div>
                            </a>
                          </div>
                        </div>
                        <div class="grid-x align-middle">
                          <div class="medium-2 cell">
                            <div class="horario">18:00 - 19:00</div>
                          </div>
                          <div class="medium-10 cell">
                            <a href="https://www.youtube.com/channel/UCTyKrM5aXG1iPI1OhG4j3sQ" target="_blank" rel="noreferrer">
                            <div data-equalizer-watch="" class="conferencia digital-talk" style="height: auto;">
                              <p>YouTube</p>
                              <h4>DESAPRENDER</h4>
                              <p class="conferencista">Zarina Rivera - Tümu</p>
                            </div>
                            </a>
                          </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="quinto" role="tabpanel" aria-labelledby="quinto-tab">
                        <div class="grid-x align-middle">
                          <div class="medium-2 cell">
                            <div class="horario">10:00 - 11:00</div>
                          </div>
                          <div class="medium-10 cell">
                            <a href="https://www.youtube.com/channel/UCTyKrM5aXG1iPI1OhG4j3sQ" target="_blank" rel="noreferrer">
                            <div data-equalizer-watch="" class="conferencia digital-talk" style="height: auto;">
                              <p>YouTube</p>
                              <h4>Innovando para resolver PPUs (Pin***s Problemas Urgentes)</h4>
                              <p class="conferencista">Raúl de Anda - Irrazonable</p>
                            </div>
                            </a>
                          </div>
                        </div>
                        <div class="grid-x align-middle">
                          <div class="medium-2 cell">
                            <div class="horario">12:30 - 13:30</div>
                          </div>
                          <div class="medium-10 cell">
                            <a href="https://www.youtube.com/channel/UCTyKrM5aXG1iPI1OhG4j3sQ" target="_blank" rel="noreferrer">
                            <div data-equalizer-watch="" class="conferencia digital-talk" style="height: auto;">
                              <p>YouTube</p>
                              <h4>Emprendimiento creativo para salvar el mundo</h4>
                              <p class="conferencista">Alejandra Luzardo - BID</p>
                            </div>
                            </a>
                          </div>
                        </div>
                        <div class="grid-x align-middle">
                          <div class="medium-2 cell">
                            <div class="horario">18:00 - 19:00</div>
                          </div>
                          <div class="medium-10 cell">
                            <a href="https://www.youtube.com/channel/UCTyKrM5aXG1iPI1OhG4j3sQ" target="_blank" rel="noreferrer">
                            <div data-equalizer-watch="" class="conferencia digital-talk" style="height: auto;">
                              <p>YouTube</p>
                              <h4>Black Bot inteligencia de negocios </h4>
                              <p class="conferencista">Jonathan Álvarez / Fernanda Rocha - Blackbot Inteligence</p>
                            </div>
                            </a>
                          </div>
                        </div>
                    </div>
                  </div> <!-- tabcontent -->
                  </div>
                  </div> <!-- agenda -->

            </div>
        </div>
    </div>
</section>

<div class="space-50"> </div>

<div class="ponentes-home">
<section id="section-ponentes" class="container">

    <div class="row padding-top-80"> </div>
    <div class="row">

        <div class="col-md-4 text-left col-md-offset-right-8"> 
            <h1 class="color-white title-ponentes" data-aos="zoom-in">VOCES DEL FUTURO</h1>
            <div class="space-20"> </div>
            <p>¿Qué significa ser un Neo Emprendedor? Es atreverse a emprender en estos tiempos de cambios y retos.</p>
            <p>CEO te trae personas experimentadas y llenas de conocimiento, para compartirte herramientas y puedas alcanzar tus metas.</p>
        </div>
        <div class="col-md-8 grid-ponentes margin-top-mobile-30 col-md-offset-4"> 
                
                <!-- ponente -->
                <div class="row">

                      @foreach($ponentes as $p)
                      <?php $url_img = preg_replace("/^http:/i", "https:", $p->Imagenes[0]->url_img); ?>
                      <!-- Modal Ponente -->
                      <div class="modal fade ponenteModals" id="ponente_{{$p->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-content">
                            <div class="modal-body">
                              <div class="container-fluid">
                              <div class="row">
                                  <div class="col-md-5">
                                      <div class="space-20"> </div>
                                      <img src="{{$url_img}}?format=webp&quality=auto" alt="CEO 2020" class="img-responsive" width="100%" />
                                      <h2 class="text-center titulo-nombre">{{$p->nombre_conferencista}}</h2>
                                      <div class="ponente-social text-center">
                                          @if(isset($p->facebook))
                                          <a aria-label="Facebook" rel="noreferrer" target="_blank" href="{{$p->facebook}}"><i class="ion-social-facebook"></i></a>
                                          @endif
                                          @if(isset($p->twitter))
                                          <a aria-label="Twitter" rel="noreferrer" target="_blank" href="{{$p->twitter}}"><i class="ion-social-twitter"></i></a>
                                          @endif
                                          @if(isset($p->youtube))
                                          <a aria-label="Linkedin" rel="noreferrer" target="_blank" href="{{$p->youtube}}"><i class="ion-social-linkedin"></i></a>
                                          @endif
                                          @if(isset($p->instagram))
                                          <a aria-label="Instagram" rel="noreferrer" target="_blank" href="{{$p->instagram}}"><i class="ion-social-instagram"></i></a>
                                          @endif
                                        </div>
                                      
                                  </div>
                                  <div class="col-md-7">
                                      <h2 class="titulo-ponente-modal">{{$p->cargo}}/{{$p->empresa}}</h2>
                                      <div class="semblanza-contener"><?php echo $p->bio; ?></div>
                                  </div>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Modal Ponente -->

                      <div class="col-md-4 col-sm-6 col-xs-6 space-bottom-10 space-bottom-ponentes">
                          <div class="ponente_item">
                              <img src="{{$url_img}}?format=webp&quality=auto" alt="CEO 2020" class="mx-auto img-responsive" width="100%" />
                              <div class="ponente_item_hover">
                                  <div class="ponente-border clearfix">
                                      <div class="item_info">
                                          <span>{{$p->nombre_conferencista}}</span>
                                          <em class="cargo-ponente">{{$p->cargo}}/{{$p->empresa}}</em>
                                          <div class="ponente-social">
                                            @if(isset($p->facebook))
                                            <a aria-label="Facebook" rel="noreferrer" target="_blank" href="{{$p->facebook}}"><i class="ion-social-facebook"></i></a>
                                            @endif
                                            @if(isset($p->twitter))
                                            <a aria-label="Twitter" rel="noreferrer" target="_blank" href="{{$p->twitter}}"><i class="ion-social-twitter"></i></a>
                                            @endif
                                            @if(isset($p->youtube))
                                            <a aria-label="Linkedin" rel="noreferrer" target="_blank" href="{{$p->youtube}}"><i class="ion-social-linkedin"></i></a>
                                            @endif
                                            @if(isset($p->instagram))
                                            <a aria-label="Instagram" rel="noreferrer" target="_blank" href="{{$p->instagram}}"><i class="ion-social-instagram"></i></a>
                                            @endif
                                          </div>
                                          <em class="ver-ponente" onclick="showPonente('ponente_{{$p->id}}')">ver <i class="ion-ios-arrow-right"></i></em>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach
                     
                      

                </div>
                <!-- end ponente -->

                <div class="row container-btn">
                  <div class="col-md-4 col-md-offset-8 space-40">
                      <a href="{{url('/')}}/ponentes">
                      <div class="text-center btna btn-1 btn-1c">
                          <div>Ver más</div>
                      </div>
                      </a>
                  </div>
                </div>

               
        </div>
    </div>
    <div class="row padding-bottom-80"> </div>
</section>
</div>

<div class="space-50"> </div>
<section id="section-aliados" class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="title-aliados">ALIADOS DE CONTENIDO</h2>
        </div>
        <div class="col-md-12">
            <hr>
        </div>

        <!-- Carousel Aliados mobile  -->
        <div class="block-mobile" data-aos="fade-up">
          <div class="aliados-iconos-v1 slider col-md-12 text-center container space-30">
              <div class="item"> 
                      <a href="https://www.iadb.org/es" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/01_bid.svg') }}"  alt="BID"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.distritoemprendedor.com/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/02_distrito.svg') }}"  alt="DISTRITO EMPRENDEDOR"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.emprendimientosocial.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/03_esmex.svg') }}"  alt="ESMEX"></a>
              </div>
              <div class="item"> 
                      <a href="https://ilab.net/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" style="height: 80px; width: auto !important;" src="{{ asset('layout/assets/img/home/aliados/04_ilab-f.png?format=webp&quality=auto') }}"  alt="ILAB"></a>
              </div>
              <div class="item"> 
                      <a href="https://mexicocity.impacthub.net/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/05_impact.svg') }}"  alt="IMPACT HUB"></a>
              </div>
              <div class="item"> 
                      <a href=" https://www.mercadolibre.com.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/06_mercado.svg') }}"  alt="MERCADO LIBRE"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.reforestamosmexico.org/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/07_reforestemos.svg') }}"  alt="REFORESTAMOS"></a>
              </div>
              <div class="item"> 
                      <a href="https://someonesomewhere.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/08_ssw.png?format=webp&quality=auto') }}"  alt="Someone Somewhere"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.irrazonable.org/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/09_umx.svg') }}"  alt="UNREASONABLE"></a>
              </div>
              <div class="item">  
                      <a href="https://www.wwf.org.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/10_wwf.svg?format=webp&quality=auto') }}"  alt="WWF"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.facebook.com/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/11_facebook.svg') }}"  alt="Facebook"></a>
              </div>
              <div class="item"> 
                      <a href="https://coop.posible.org.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/12_Posible.png?format=webp&quality=auto') }}"  alt="Posible"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.viximexico.com/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/13_vixi.png?format=webp&quality=auto') }}"  alt="Vixi"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.facebook.com/BlancosyBancos/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale img-aliados-custome" style="height: 80px; width: auto !important;" src="{{ asset('layout/assets/img/home/aliados/14_blancos.png?format=webp&quality=auto') }}" alt="Blancos y Bancos"></a>
              </div>
              <div class="item"> 
                      <a href="https://lacana.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale img-aliados-custome" style="height: 80px; width: auto !important;" src="{{ asset('layout/assets/img/home/aliados/15_lacana.png?format=webp&quality=auto') }}"  alt="La Cana"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.ikea.com/es/es/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/16_ikea.svg?format=webp&quality=auto') }}"  alt="Ikea"></a>
              </div>
              <div class="item"> 
                      <a href="https://svx.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/17_svx.png?format=webp&quality=auto') }}"  alt="SVX"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.psm.org.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/18_psm.svg?format=webp&quality=auto') }}"  alt="PSM"></a>
              </div>
              <div class="item"> 
                      <a href="http://fairconnection.cl/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/19_fair.svg?format=webp&quality=auto') }}"  alt="Fair Connection"></a>
              </div>
              <div class="item">  
                      <a href="https://holacode.com/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/20_website.png?format=webp&quality=auto') }}"  alt="Hola Code"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.tumu.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/21_tumu.png?format=webp&quality=auto') }}"  alt="TUMU"></a>
              </div>
              <div class="item"> 
                      <a href="#" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale img-aliados-custome" src="{{ asset('layout/assets/img/home/aliados/22_agile.png?format=webp&quality=auto') }}"  alt="Dojo Agile"></a>
              </div>
              <div class="item">  
                      <a href="https://oaxacanitachocolate.com/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/23_Oaxacanita.svg?format=webp&quality=auto') }}"  alt="Oaxacanita"></a>
              </div>
          </div>
        </div>
        <!-- Carousel Aliados mobile  -->

        <!-- Carousel Aliados Desktop  -->
        <div class="block-desktop" data-aos="fade-up">
          <div class="aliados-iconos-general slider col-md-12 text-center container space-10">
              <div class="item"> 
                      <a href="https://mexicocity.impacthub.net/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/05_impact.svg') }}"  alt="IMPACT HUB"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.emprendimientosocial.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/03_esmex.svg') }}"  alt="ESMEX"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.irrazonable.org/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/09_umx.svg') }}"  alt="UNREASONABLE"></a>
              </div>
               <div class="item"> 
                      <a href="https://coop.posible.org.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/12_Posible.png?format=webp&quality=auto') }}"  alt="Posible Coop"></a>
              </div>
          </div>
          <div class="aliados-iconos-general slider col-md-12 text-center container space-30">
              <div class="item"> 
                      <a href="https://www.reforestamosmexico.org/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/07_reforestemos.svg') }}"  alt="REFORESTAMOS"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.iadb.org/es" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/01_bid.svg') }}"  alt="BID"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.distritoemprendedor.com/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/02_distrito.svg') }}"  alt="DISTRITO EMPRENDEDOR"></a>
              </div>
              <div class="item"> 
                      <a href=" https://www.mercadolibre.com.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/06_mercado.svg') }}"  alt="MERCADO LIBRE"></a>
              </div>
          </div>
          <div class="aliados-iconos-general slider col-md-12 text-center container space-30">
              <div class="item"> 
                      <a href="https://www.facebook.com/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/11_facebook.svg') }}"  alt="Facebook"></a>
              </div>
              <div class="item"> 
                      <a href="https://ilab.net/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale img-aliados-custome" style="height: 80px; width: auto !important;"  src="{{ asset('layout/assets/img/home/aliados/04_ilab-f.png?format=webp&quality=auto') }}"  alt="ILAB"></a>
              </div>
              <div class="item"> 
                      <a href="https://someonesomewhere.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/08_ssw.png?format=webp&quality=auto') }}"  alt="Someone Somewhere"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.facebook.com/BlancosyBancos/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale img-aliados-custome" style="height: 80px; width: auto !important;" src="{{ asset('layout/assets/img/home/aliados/14_blancos.png?format=webp&quality=auto') }}" alt="Blancos y Bancos"></a>
              </div>
              
          </div>
          <div class="aliados-iconos-general slider col-md-12 text-center container space-30">
              <div class="item"> 
                      <a href="https://svx.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/17_svx.png?format=webp&quality=auto') }}"  alt="SVX"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.viximexico.com/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/13_vixi.png?format=webp&quality=auto') }}"  alt="Vixi"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.ikea.com/es/es/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/16_ikea.svg?format=webp&quality=auto') }}"  alt="Ikea"></a>
              </div>
              <div class="item"> 
                      <a href="http://fairconnection.cl/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/19_fair.svg?format=webp&quality=auto') }}"  alt="Fair Connection"></a>
              </div>
          </div>
          <div class="aliados-iconos-general slider col-md-12 text-center container space-30">
              <div class="item"> 
                      <a href="https://www.psm.org.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/18_psm.svg?format=webp&quality=auto') }}"  alt="PSM"></a>
              </div>
              <div class="item"> 
                      <a href="https://lacana.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale img-aliados-custome" style="height: 80px; width: auto !important;"  src="{{ asset('layout/assets/img/home/aliados/15_lacana.png?format=webp&quality=auto') }}"  alt="La Cana"></a>
              </div>
              <div class="item">  
                      <a href="https://www.wwf.org.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/10_wwf.svg?format=webp&quality=auto') }}"  alt="WWF"></a>
              </div>
              <div class="item">  
                      <a href="https://holacode.com/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/20_website.png?format=webp&quality=auto') }}"  alt="Hola Code"></a>
              </div>
          </div>
          <div class="aliados-iconos-general slider col-md-12 text-center container space-30">
              <div class="item"> 
                      <a href="https://www.tumu.mx/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/21_tumu.png?format=webp&quality=auto') }}"  alt="TUMU"></a>
              </div>
              <div class="item"> 
                      <a href="#" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale img-aliados-custome" src="{{ asset('layout/assets/img/home/aliados/22_agile.png?format=webp&quality=auto') }}"  alt="Dojo Agile"></a>
              </div>
              <div class="item">  
                      <a href="https://oaxacanitachocolate.com/" rel="noreferrer" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/23_Oaxacanita.svg?format=webp&quality=auto') }}"  alt="Oaxacanita"></a>
              </div>
              <div class="item">  </div>
          </div>
        </div>
        <!-- Carousel Aliados Desktop  -->
       

        <div class="col-md-12">
            <div class="space-30"> </div>
            <hr>
        </div>
        
    </div>
</section>

<div class="space-50"> </div>
<section id="section-ediciones" class="container">
    <div class="row">
        <div class="col-md-8 text-left"> 
                <h1 class="glitch glitch-left weight-300" data-text="¿QUÉ PASÓ">¿QUÉ PASÓ</h1>
                <h1 class="glitch glitch-left weight-900" data-text="EN EDICIONES ANTERIORES?">EN EDICIONES ANTERIORES?</h1>
        </div>
        <div class="col-md-4"> 
             <img data-aos="zoom-in-left" class="img-responsive float-right-ediciones" src="{{ asset('layout/assets/img/general/logo-interno.png?format=webp&quality=auto') }}" width="150" alt="CEO 2020">
        </div>
        <div class="col-md-offset-2 col-md-8 col-md-offset-right-2 space-50 text-left"> 
            <p>
                Cada año expandimos nuestro Universo Emprendedor y construimos sobre las bases de años pasados para hacer del CEO un evento cada vez más alineado a las necesidades de los emprendedores de todas las edades. </p>
            <p class="weight-900">¡Gracias por tu asistencia!</p>
        </div>
    </div>
    <div class="ediciones-anteriores  col-md-12 slider space-50">
        <div class="text-center item"> 
                <video title="CEO 2018" src="{{ asset('layout/assets/video/CEO2018.mp4') }}" width="100%" class="responsive-iframe"  height="310" controls poster="{{ asset('layout/assets/img/home/edicion-2018.png?format=webp&quality=auto') }}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    HTML5 vídeo no es soportado por este navegador
                </video>

                <div class="space-20"> </div>
              
                <div class="container-btn">
                      <a class="link-ponentes" rel="noreferrer" target="_blank" href="https://www.conectandoemprendedores.mx/2018/">
                        <div class="text-center btna btns-2 btn-2c">
                                <div>CEO 2018</div>
                        </div>
                      </a>
                </div>
 
        </div>
        <div class="text-center item"> 
              <iframe title="CEO 2019" id="ceo_2019" width="100%" class="responsive-iframe" height="310" src="" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
               
                <div class="space-20"> </div>
               
                <div class="container-btn">
                      <a class="link-ponentes" rel="noreferrer" target="_blank" href="https://www.conectandoemprendedores.mx/2019/">
                        <div class="text-center btna btns-2 btn-2c">
                                <div>CEO 2019</div>
                        </div>
                      </a>
                </div>
        </div>
    </div>
</section>

<section id="section-social" class="container">
    
    <div class="col-md-12 space-50">
        <hr>
    </div>

    <div class="row space-100-newsletter">
        <div class="col-md-6 text-left"> 
                <h1 class="glitch glitch-left weight-300" data-text="¡ENTÉRATE">¡ENTÉRATE</h1>
                <h1 class="glitch glitch-left weight-900" data-text="DE TODO">DE TODO!</h1>
               
                <div class="space-100-newsletter"> </div>

                <p class="text-right">Estaremos actualizándote constantemente sobre ponentes, horarios, actividades y mucho más por medio de nuestras redes sociales, síguenos en Facebook, Instagram, Twitter, TikTok y escucha nuestras playlists temáticas en Spotify.</p>

                <div class="space-30"> </div>

                <div class="newsletter"> Suscríbete a nuestro newsletter. </div>
                <div class="container-newsletter"> 
                  {!! Form::open(['route' => 'newsletter.store']) !!}

                    {{ csrf_field() }}
                    <div class="col-md-8 col-xs-6 text-left border_newsletter_v1"> 
                      <div class="form-group">
                         <input type="email" class="form-control mb-2" value="{{old('email')}}" id="newsletter_email" name="email" required="" placeholder="Tu email">
                      </div>
                      @if(count($errors))
                          <div class="form-group">
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach($errors->all() as $error)
                                          <li>{{$error}}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          </div>
                      @endif
                    </div>
                    <div class="col-md-4 col-xs-6 text-right border_newsletter_v2">
                        <button class="btn-newsletter" type="submit">Enviar</button>
                    </div>
             
                  {!! Form::close() !!}
                </div>
              
                <div data-aos="zoom-in-up" class="space-80">
                  <a href="{{url('/')}}/paneles"><img class="img-responsive" src="{{ asset('layout/assets/img/home/CEO_Banner_Registro_Paneles.gif?format=webp&quality=auto') }}"  alt="Paneles CEO"></a>
                </div>


        </div>
        <div class="col-md-6 text-center container-rrss border-left-contenido"> 
              <div class="col-md-6"> 
                        <div class="fb-page" data-href="https://www.facebook.com/ConectandoEnOaxaca/" data-tabs="timeline" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ConectandoEnOaxaca/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ConectandoEnOaxaca/">Conectando Emprendedores</a></blockquote></div>
              </div>
              <div class="col-md-6 space-20-mobile"> 
                   
                   <script type="application/javascript" src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe title="Instagram Feed" src="https://cdn.lightwidget.com/widgets/84c4db91a6265ba8b34bd51436495224.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

              </div>
        </div>
    </div>
</section>

<div class="space-80"></div>

  <!-- Modal Paneles -->
<div class="modal fade panelesModals" id="paneles_ceo" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xs" role="document">
  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-content">
    <div class="modal-body">
      <div class="container-fluid">
            <a href="{{url('/')}}/paneles"><img class="img-responsive" src="{{ asset('layout/assets/img/home/CEO_POP_PANEL.png?format=webp&quality=auto') }}" width="auto" alt="Paneles CEO 2020"></a>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  function showPonente(id_ponente){
      $("#"+id_ponente).modal('show');
  }

  function updateYoutube(id_video) {
    
  }
  window.addEventListener("DOMContentLoaded", function(){
      
      $("#paneles_ceo").modal('show');

      let today = new Date().toISOString().slice(0, 10);

      if(today=="2020-08-25"){
        $("#segundo").addClass("in active");
        $(".nav-dos").addClass("active");
      }else if(today=="2020-08-26"){
        $("#tercero").addClass("in active");
        $(".nav-tres").addClass("active");
      }else if(today=="2020-08-27"){
        $("#cuarto").addClass("in active");
        $(".nav-cuatro").addClass("active");
      }else if(today=="2020-08-28"){
        $("#quinto").addClass("in active");
        $(".nav-cinco").addClass("active");
      }else{
        $("#primero").addClass("in active");
        $(".nav-uno").addClass("active");
      }
     
      $("#live_ceo_2020").attr("src","https://www.youtube.com/embed/tiUzMejT-58?autoplay=1&loop=1&rel=0&showinfo=0&iv_load_policy=3");
      
      $("#ceo_2019").attr("src","https://www.youtube.com/embed/6e4K2zZSjtE?controls=0");


      (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0';
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      
  });
</script>

@endsection

@include("front_layout.footer")