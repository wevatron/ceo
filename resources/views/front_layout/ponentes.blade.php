@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")


<!-- box-Ponentes -->
<section id="interior-ponentes" class="box-intro">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2 space-100"> 
            <div class="title-header-ponentes">
                <h1 class="glitch text-left glitch-left-white weight-900" data-text="Voces del Futuro">Voces del Futuro</h1>
            </div>
        </div>
        <div class="col-md-8 color-white space-ponentes col-md-offset-4"> 
             <p class="text-right">En 2020 nuestro mundo se transformó, el futuro llegó y ahora queremos hacer uno nuevo, ¿pero por dónde empezar? Los aliados de CEO 2020 tienen mucho que compartirte;  son expertos en distintas áreas del emprendimiento, son las voces que en este tiempo se necesitan. <b>Neo Emprendedor</b>, no te pierdas esta gran oportunidad de conectar con las mentes del futuro.</p>
        </div>
    </div>

</div>
</section>
<!-- end box-Ponentes -->

<section class="grid-ponentes">
<div class="container">
    <div class="space-50"> </div>
    <div class="grid-ponentes-full"> 

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

                      @if(isset($url_img))
                          <img src="{{$url_img}}?format=webp&quality=auto" alt="CEO 2020" class="img-responsive" />
                      @else
                          <img src="{{asset('layout/assets/img/general/no-image.jpg')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                      @endif

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
             
              <div class="space-30"></div>


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