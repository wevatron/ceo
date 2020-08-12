@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")


<!-- Bazar digital -->
<section id="interior-bazar" class="box-intro">
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-3 space-100"> 
        	<div class="title-header-bazar">
	            <h1 class="text-left color-pink weight-900">Bazar Digital </h1>
                <h1 class="text-left color-pink no-margin-top weight-900">CE0 2020</h1>
   			</div>
        </div>
        <div class="col-md-6 color-black space-bazar col-md-offset-6"> 
             <p class="text-left weight-900">"¿Que están creando los Neo Emprendedores?</p> 

             <p class="text-left">Este año CEO muda su icónico Bazar de Emprendedores a esta plataforma Digital. Descubre y conoce los productos más innovadores de este año, pero no esperes mucho ¡solo están por tiempo limitado!"</p>
        </div>
    </div>

</div>
</section>
<!-- end box-bazar digital -->

<div class="div-bazar">
    
     <section class="grid-bazar">
     <div class="container grid-bazar-full">

       <!-- Bazar Ponentes div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- bazar_categorias-->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories cat-bazar text-center">
                        <ul class="portfolio_filter">
                            <?php $i = 0; $clase = "active"; ?>
                            @foreach($categorias as $categoria)
                            <?php if($i==0) { $clase = "active"; }else { $clase = "";} ?>
                            <li>
                            <a href="#!" onclick="filtrarBazar('btn-{{$categoria->id}}')" class="filter-button {{$clase}}" id="btn-{{$categoria->id}}" >      {{$categoria->descripcion}}
                            </a>
                            </li>
                            <?php $i++; ?>
                            @endforeach

                        </ul>
                    </nav>
                </div>
                <!-- bazar_categorias -->

                <!-- bazar_container -->
                <div class="no-padding slide-bazar owl-carousel portfolio_container clearfix">

                    <!-- emprendedor slide -->
                    @foreach($bazares as $bazar)
                    <div class="item filter btn-{{$bazar->c_categorias_id}}">
                        <a href="#!" onclick="showBazar('bazar_{{$bazar->id}}')" class="portfolio_item">
                            @if(isset($bazar->Imagenes[0]->imagen))
                                <img src="{{$bazar->Imagenes[0]->imagen}}" alt="image" class="img-responsive" />
                            @else
                                <img src="{{ asset('layout/assets/img/home/circulo-invitacion.png')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                            @endif
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>{{$bazar->nombre}}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <!-- end emprendedor slide -->

                </div>
                <!-- end bazar_container -->
            </div>
            <!-- portfolio -->
        </div>
        <!-- end Header Bazar div -->

        </div>
        </section>


        <!-- Detalle Bazar -->
        <section class="detail-bazar space-100">
        <div class="container">
         @foreach($bazares as $bazar)
            <!-- Bazares row -->
            <div class="bazares bazar_{{$bazar->id}}"> 
            <div class="row">
            <div class="col-md-5 col-sm-6 text-right">
                @if(isset($bazar->Imagenes[0]->imagen))
                    <img src="{{$bazar->Imagenes[0]->imagen}}" alt="{{$bazar->nombre}}" class="img-responsive img-auto" width="180" />
                @else
                    <img src="{{ asset('layout/assets/img/home/circulo-invitacion.png')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                @endif
                <p class="text-right space-50 space-mobile-30">{{$bazar->descripcion}}</p>
                <p class="color-black space-50 space-mobile-30 conoce-mas">Conoce más de la marca  |  <span class="color-pink"><a class="color-pink" href="{{$bazar->web}}" target="_blank">Sitio Web</a></span></p>

                <div class="ponente-social">
                    <a target="_blank" href="{{$bazar->facebook}}"><i class="ion-social-facebook"></i></a>
                    <a target="_blank" href="{{$bazar->twitter}}"><i class="ion-social-twitter"></i></a>
                    <a target="_blank" href="{{$bazar->linkedin}}"><i class="ion-social-linkedin"></i></a>
                    <a target="_blank" href="{{$bazar->instagram}}"><i class="ion-social-instagram"></i></a>
              </div>
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="video-bazar">
                    <iframe src="https://www.youtube.com/embed/{{$bazar->video}}" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            </div>

            <div class="row space-20">
                <div class="col-md-offset-5 thumbs-img text-center col-md-7">
                    <div class="col-md-4 col-sm-6 col-xs-2">
                        @if(isset($bazar->Imagenes[1]->imagen))
                            <img src="{{$bazar->Imagenes[1]->imagen}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                        @else
                            <img src="{{ asset('layout/assets/img/home/circulo-invitacion.png')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                        @endif
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-2">
                        @if(isset($bazar->Imagenes[2]->imagen))
                            <img src="{{$bazar->Imagenes[2]->imagen}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                        @else
                            <img src="{{ asset('layout/assets/img/home/circulo-invitacion.png')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                        @endif
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-2">
                        @if(isset($bazar->Imagenes[3]->imagen))
                        <img src="{{$bazar->Imagenes[3]->imagen}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                        @else
                        <img src="{{ asset('layout/assets/img/home/circulo-invitacion.png')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                        @endif
                    </div>
                </div>
            </div>
            </div>
            <!-- Bazares row -->
        @endforeach
        </div>
        </section>
        <!-- End Detalle Bazar -->
  

</div>

<div class="space-80"></div>

<script type="text/javascript">
    function filtrarBazar(id) {
        $(".filter").not("."+id).hide(100);
        $(".filter").filter("."+id).show(100);

        if ($(".filter-button").removeClass("active")) {
            $("#"+id).removeClass("active");
        }
        $("#"+id).addClass("active");

        var owl = $(".owl-carousel").owlCarousel({loop: true, nav: true}); 
        owl.data('owl.carousel').options.loop = false;
        owl.data('owl.carousel').options.nav = false;
    }
    function showBazar(idBazar){
        $(".bazares").removeClass("activarBazar");
        $("."+idBazar).addClass("activarBazar");
    }
</script>

@endsection

@include("front_layout.footer")