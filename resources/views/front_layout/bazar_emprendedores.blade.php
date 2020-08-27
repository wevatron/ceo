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