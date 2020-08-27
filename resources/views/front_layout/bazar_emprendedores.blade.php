@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")


<!-- Bazar digital -->
<section id="interior-bazar" class="box-intro">
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-3 space-80"> 
        	<div class="title-header-bazar" >
	            <h1 class="text-left color-pink weight-900">Bazar Digital </h1>
                <h1 class="text-left color-pink no-margin-top weight-900">CE0 2020</h1>
   			</div>
        </div>
        <div class="col-md-6 color-black bg-white space-bazar col-md-offset-6" data-aos="fade-up"> 
             <p class="text-left weight-900">¿Que están creando los Neo Emprendedores?</p> 

             <p class="text-left">Este año CEO muda su icónico Bazar de Emprendedores a esta plataforma digital. Descubre y conoce los productos más innovadores de este año, pero no esperes mucho ¡solo están por tiempo limitado!</p>
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
                    <nav class="categories bg-white cat-bazar text-center">
                        <ul class="portfolio_filter">
                            <?php $i = 0; $clase = "active"; ?>
                            @foreach($categorias as $categoria)
                            <?php if($i==0) { $clase = "active"; }else { $clase = "";} ?>
                            <li class="item">
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
                <div class="no-padding portfolio_container clearfix">

                    <!-- emprendedor slide -->
                    @foreach($bazares as $bazar)
                    <?php $url_img = preg_replace("/^http:/i", "https:", $bazar->Imagenes[0]->imagen); ?>
                    <div class="item col-md-3 col-xs-4 space-30 cardview filter btn-{{$bazar->c_categorias_id}}">
                        <a href="#!" onclick="showBazar('bazar_{{$bazar->id}}','{{$bazar->video}}')" class="portfolio_item">
                            @if(isset($url_img))
                                <img src="{{$url_img}}?format=webp&quality=auto" alt="image" class="img-responsive" />
                            @else
                                <img src="{{ asset('layout/assets/img/general/no-image.jpg')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
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

        <section class="block-blue space-20">

        </section>


        <!-- Detalle Bazar -->
        <section class="detail-bazar space-50">
        <div class="container">
         @foreach($bazares as $bazar)
         <?php 
            $url_img = preg_replace("/^http:/i", "https:", $bazar->Imagenes[0]->imagen); 
            $url_img_v1 = preg_replace("/^http:/i", "https:", $bazar->Imagenes[1]->imagen); 
            $url_img_v2 = preg_replace("/^http:/i", "https:", $bazar->Imagenes[2]->imagen); 
            $url_img_v3 = preg_replace("/^http:/i", "https:", $bazar->Imagenes[3]->imagen); 

         ?>
            <!-- Bazares row -->
            <div class="bazares bazar_{{$bazar->id}}"> 
            <div class="row">
            <div class="col-md-5 col-sm-6 text-right">
                @if(isset($url_img))
                    <img src="{{$url_img}}?format=webp&quality=auto" alt="{{$bazar->nombre}}" class="img-responsive img-auto" width="180" />
                @else
                    <img src="{{ asset('layout/assets/img/general/no-image.jpg?format=webp&quality=auto')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                @endif
                <p class="text-right space-50 space-mobile-30">{{$bazar->descripcion}}</p>
                <p class="color-black space-50 space-mobile-30 conoce-mas">Conoce más de la marca  |  
                    <span class="color-pink">
                        @if(isset($bazar->web))
                            <a class="color-pink" href="{{$bazar->web}}" target="_blank">Sitio Web</a>
                        @endif
                    </span>
                </p>

                <div class="ponente-social">
                    @if(isset($bazar->facebook))
                    <a target="_blank" href="{{$bazar->facebook}}"><i class="ion-social-facebook"></i></a>
                    @endif
                    @if(isset($bazar->twitter))
                    <a target="_blank" href="{{$bazar->twitter}}"><i class="ion-social-twitter"></i></a>
                    @endif
                    @if(isset($bazar->instagram))
                    <a target="_blank" href="{{$bazar->instagram}}"><i class="ion-social-instagram"></i></a>
                    @endif
                    @if(isset($bazar->youtube))
                    <a target="_blank" href="{{$bazar->youtube}}"><i class="ion-social-youtube"></i></a>
                    @endif
              </div>
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="video-bazar">
                    <iframe class="bazar_{{$bazar->id}}" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            </div>

            <div class="row space-20">
                <div class="col-md-offset-5 thumbs-img text-center col-md-7">
                    <div class="col-md-4 col-sm-6 col-xs-4 space-10">
                        @if(isset($url_img_v1))
                            <img src="{{$url_img_v1}}?format=webp&quality=auto" alt="{{$bazar->nombre}}" class="img-responsive openModal" width="100%" />
                        @else
                            <img src="{{ asset('layout/assets/img/general/no-image.jpg?format=webp&quality=auto')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                        @endif
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-4 space-10">
                        @if(isset($url_img_v2))
                            <img src="{{$url_img_v2}}?format=webp&quality=auto" alt="{{$bazar->nombre}}" class="img-responsive openModal" width="100%" />
                        @else
                            <img src="{{ asset('layout/assets/img/general/no-image.jpg?format=webp&quality=auto')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
                        @endif
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-4 space-10">
                        @if(isset($url_img_v3))
                        <img src="{{$url_img_v3}}?format=webp&quality=auto" alt="{{$bazar->nombre}}" class="img-responsive openModal" width="100%" />
                        @else
                        <img src="{{ asset('layout/assets/img/general/no-image.jpg?format=webp&quality=auto')}}" alt="{{$bazar->nombre}}" class="img-responsive" width="100%" />
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


        <!-- Modal Img -->
          <div id="imagesModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-header header-modal">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-content">
                <div class="modal-body">
                  <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <img id="img-modal" src="" alt="CEO 2020" class="img-responsive" />
                      </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- End Modal Ponente -->
  

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

        $(".bazares").hide();
        $('#owl-carousel').trigger('remove.owl.carousel',0).trigger('refresh.owl.carousel');

    }
    var currentClass = ""; 
    function showBazar(idBazar, idVideo){

        currentClass = currentClass;
        
        if(currentClass != ''){
            $("iframe."+currentClass)[0].src = "";
        }

        $(".video-bazar ."+idBazar).attr("src","https://www.youtube.com/embed/"+idVideo);

        $(".block-blue").show();
        $(".bazares").removeClass("activarBazar");
        $("."+idBazar).addClass("activarBazar");
       
        window.scrollTo(0, $(".detail-bazar").offset().top);

        currentClass = idBazar;
    }

    window.addEventListener("DOMContentLoaded", function(){
      
        filtrarBazar('btn-1');

        $(".block-blue").hide();

        $('.openModal').click(function(){
           $('#imagesModal').hide('show'); 
           var imagen = $(this).attr('src');
           $("#img-modal").attr("src",imagen);
           $('#imagesModal').modal('show');
        });
    });    
</script>

@endsection

@include("front_layout.footer")