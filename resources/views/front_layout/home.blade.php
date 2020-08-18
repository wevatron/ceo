@extends("front_layout.main")
@include("front_layout.header-v1")
@section("body")
<div class="space-50 hidden"> </div>
<section id="section-bazar" class="container hidden">
    <div class="row">
        <div class="col-md-7"> 
            <div class="text-left col-md-4 no-padding circle-img">
                <img class="img-responsives" src="{{ asset('layout/assets/img/home/circulo-invitacion.png') }}" width="420" alt="CEO 2020">
            </div>
            <div class="text-left col-md-8 no-padding space-colegas-150">
                <h1 class="glitch glitch-left weight-300" data-text="INVITA A TUS COLEGAS">INVITA A TUS COLEGAS</h1>
                <h1 class="glitch glitch-left weight-900 no-margin-top" data-text="Y AMISTADES">Y AMISTADES</h1>
                <p class="margin-left-20 space-30 weight-500">¡Este año no hay distancia!  </p>
                <p class="margin-left-20">Estaremos más conectados.</p>
            </div>
        </div>
        <div class="col-md-5"> 
             <div class="text-left">
                <h1 class="color-pink no-margin-top margin-top-mobile-50 weight-900">Explora</h1>
                <a href="{{url('/')}}/bazar-digital"><img class="img-responsive grayscale overlay_" src="{{ asset('layout/assets/img/home/banner-bazar.gif') }}" width="480" alt="CEO 2020"></a>
            </div>
        </div>
    </div>
</section>

<div class="space-50 hidden"> </div>
<section id="section-ponentes" class="ponentes-home">
<div class="container">
    <div class="row">
        <div class="col-md-4 text-left col-md-offset-right-8"> 
            <h1 class="color-white title-ponentes">VOCES DEL FUTURO</h1>
            <div class="space-20"> </div>
            <p>¿Qué significa ser un Neo Emprendedor? Es atreverse a emprender en estos tiempos de cambios y retos.</p>
            <p>CEO te trae personas experimentadas y llenas de conocimiento, para compartirte herramientas y puedas alcanzar tus metas.</p>
        </div>
        <div class="col-md-8 grid-ponentes margin-top-mobile-30 col-md-offset-4"> 
                
                <!-- ponente -->
                <div class="row">

                
                      <div class="row">
                      @foreach($ponentes as $p)
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
                                      <img src="{{$p->Imagenes[0]->url_img}}" alt="CEO 2020" class="img-responsive" width="100%" />
                                      <h2 class="text-center titulo-nombre">{{$p->nombre_conferencista}}</h2>
                                      <div class="ponente-social text-center">
                                          @if(isset($p->facebook))
                                          <a target="_blank" href="{{$p->facebook}}"><i class="ion-social-facebook"></i></a>
                                          @endif
                                          @if(isset($p->twitter))
                                          <a target="_blank" href="{{$p->twitter}}"><i class="ion-social-twitter"></i></a>
                                          @endif
                                          @if(isset($p->youtube))
                                          <a target="_blank" href="{{$p->youtube}}"><i class="ion-social-linkedin"></i></a>
                                          @endif
                                          @if(isset($p->instagram))
                                          <a target="_blank" href="{{$p->instagram}}"><i class="ion-social-instagram"></i></a>
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
                      <!-- Modal Ponente -->
                      <div class="col-md-4 col-sm-6 col-xs-6 space-bottom-10 space-bottom-ponentes">
                          <div class="ponente_item">
                              <img src="{{$p->Imagenes[0]->url_img}}" alt="CEO 2020" class="img-responsive" width="100%" />
                              <div class="ponente_item_hover">
                                  <div class="ponente-border clearfix">
                                      <div class="item_info">
                                          <span>{{$p->nombre_conferencista}}</span>
                                          <em class="cargo-ponente">{{$p->cargo}}/{{$p->empresa}}</em>
                                          <div class="ponente-social">
                                            @if(isset($p->facebook))
                                            <a target="_blank" href="{{$p->facebook}}"><i class="ion-social-facebook"></i></a>
                                            @endif
                                            @if(isset($p->twitter))
                                            <a target="_blank" href="{{$p->twitter}}"><i class="ion-social-twitter"></i></a>
                                            @endif
                                            @if(isset($p->youtube))
                                            <a target="_blank" href="{{$p->youtube}}"><i class="ion-social-linkedin"></i></a>
                                            @endif
                                            @if(isset($p->instagram))
                                            <a target="_blank" href="{{$p->instagram}}"><i class="ion-social-instagram"></i></a>
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

                      <div class="row container-btn">
                        <div class="col-md-4 col-md-offset-8 space-40">
                            <div class="text-center btna btn-1 btn-1c">
                                 <a href="/ponentes">
                                    <div>Ver más</div>
                                 </a>
                            </div>
                        </div>
                      </div>
 
                     
                      <div class="space-30"></div>

                </div>
                <!-- end ponente -->
               
        </div>
    </div>
</div>
</section>

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
        <div class="block-mobile">
          <div class="aliados-iconos-v1 slider col-md-12 text-center container space-30">

              <div class="item"> 
                      <a href="https://mexicocity.impacthub.net/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/05_impact.svg') }}"  alt="IMPACT HUB"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.emprendimientosocial.mx/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/03_esmex.svg') }}"  alt="ESMEX"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.irrazonable.org/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/09_umx.svg') }}"  alt="UNREASONABLE"></a>
              </div>
              <div class="item"> 
                      <a href=" https://www.mercadolibre.com.mx/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/06_mercado.svg') }}"  alt="MERCADO LIBRE"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.reforestamosmexico.org/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/07_reforestemos.svg') }}"  alt="REFORESTAMOS"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.iadb.org/es" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/01_bid.svg') }}"  alt="BID"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.distritoemprendedor.com/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/02_distrito.svg') }}"  alt="DISTRITO EMPRENDEDOR"></a>
              </div>
              <div class="item"> 
                      <a href="https://coop.posible.org.mx/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/12_Posible.png') }}"  alt="Posible"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.facebook.com/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/11_facebook.svg') }}"  alt="Facebook"></a>
              </div>
              <div class="item"> 
                      <a href="https://someonesomewhere.mx/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/08_ss.png') }}"  alt="Someone Somewhere"></a>
              </div>
              <div class="item"> 
                      <a href="https://ilab.net/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/04_ilab.png') }}"  alt="ILAB"></a>
              </div>

          </div>
        </div>
        <!-- Carousel Aliados mobile  -->

        <!-- Carousel Aliados Desktop  -->
        <div class="block-desktop">
          <div class="aliados-iconos-general slider col-md-12 text-center container space-10">
              <div class="item"> 
                      <a href="https://mexicocity.impacthub.net/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/05_impact.svg') }}"  alt="IMPACT HUB"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.emprendimientosocial.mx/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/03_esmex.svg') }}"  alt="ESMEX"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.irrazonable.org/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/09_umx.svg') }}"  alt="UNREASONABLE"></a>
              </div>
              <div class="item"> 
                      <a href=" https://www.mercadolibre.com.mx/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/06_mercado.svg') }}"  alt="MERCADO LIBRE"></a>
              </div>
          </div>
          <div class="aliados-iconos-general slider col-md-12 text-center container space-30">
              <div class="item"> 
                      <a href="https://www.reforestamosmexico.org/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/07_reforestemos.svg') }}"  alt="REFORESTAMOS"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.iadb.org/es" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/01_bid.svg') }}"  alt="BID"></a>
              </div>
              <div class="item"> 
                      <a href="https://www.distritoemprendedor.com/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/02_distrito.svg') }}"  alt="DISTRITO EMPRENDEDOR"></a>
              </div>
              <div class="item"> 
                      <a href="https://coop.posible.org.mx/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/12_Posible.png') }}"  alt="Posible"></a>
              </div>
          </div>
          <div class="aliados-iconos-general slider col-md-12 text-center container space-30">
              <div class="item"> 
                      <a href="https://www.facebook.com/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/11_facebook.svg') }}"  alt="Facebook"></a>
              </div>
              <div class="item"> 
                      <a href="https://someonesomewhere.mx/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/08_ss.png') }}"  alt="Someone Somewhere"></a>
              </div>
              <div class="item"> 
                      <a href="https://ilab.net/" target="_blank"><img class="img-responsive img-grayscale" src="{{ asset('layout/assets/img/home/aliados/04_ilab.png') }}"  alt="ILAB"></a>
              </div>
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
             <img class="img-responsive float-right-ediciones" src="{{ asset('layout/assets/img/general/logo-interno.png') }}" width="150" alt="CEO 2020">
        </div>
        <div class="col-md-offset-2 col-md-8 col-md-offset-right-2 space-50 text-left"> 
            <p>
                Cada año expandimos nuestro Universo Emprendedor y construimos sobre las bases de años pasados para hacer del CEO un evento cada vez más alineado a las necesidades de los emprendedores de todas las edades. </p>
            <p class="weight-900">¡Gracias por tu asistencia!</p>
        </div>
    </div>
    <div class="ediciones-anteriores  col-md-12 slider space-50">
        <div class="text-center item"> 
                <video src="{{ asset('layout/assets/video/CEO2018.mp4') }}" width="100%" class="responsive-iframe"  height="310" controls poster="{{ asset('layout/assets/img/home/edicion-2018.png') }}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    HTML5 vídeo no es soportado por este navegador
                </video>

                <div class="space-20"> </div>
              
                <div class="container-btn">
                      <div class="text-center btna btns-2 btn-2c">
                           <a class="link-ponentes" target="_blank" href="https://www.conectandoemprendedores.mx/2018/">
                              <div>CEO 2018</div>
                           </a>
                      </div>
                </div>
 
        </div>
        <div class="text-center item"> 
              <iframe width="100%" class="responsive-iframe" height="310" src="https://www.youtube.com/embed/6e4K2zZSjtE?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               
                <div class="space-20"> </div>
               
                <div class="container-btn">
                      <div class="text-center btna btns-2 btn-2c">
                           <a class="link-ponentes" target="_blank" href="https://www.conectandoemprendedores.mx/2019/">
                              <div>CEO 2019</div>
                           </a>
                      </div>
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

                <div class="space-50"> </div>

                <div class="newsletter"> Suscríbete a nuestro newsletter. </div>

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
                    

                <div class="space-100 block-mobile"> </div>

        </div>
        <div class="col-md-6 text-center container-rrss border-left-contenido"> 
              <div class="col-md-6 space-80-mobile"> 
                    <script type="application/javascript">(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0';
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-page" data-href="https://www.facebook.com/ConectandoEnOaxaca/" data-tabs="timeline" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ConectandoEnOaxaca/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ConectandoEnOaxaca/">Conectando Emprendedores</a></blockquote></div>
              </div>
              <div class="col-md-6 space-20-mobile"> 
                   
                   <script type="application/javascript" src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/84c4db91a6265ba8b34bd51436495224.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

              </div>
        </div>
    </div>
</section>

<div class="space-80"></div>

<script type="text/javascript">
  function showPonente(id_ponente){
      $("#"+id_ponente).modal('show');
  }
</script>

@endsection

@include("front_layout.footer")