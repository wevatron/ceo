@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")

<section id="herramientas-emprender" class="box-intro">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4 class="color-white text-left">Hola {{auth()->user()->name}}, ¡Qué bueno verte!</h4>
		</div>
	    <div class="col-md-8"> 

	    	<div class="live-video">
	             <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ffmOBadlN-0?autoplay=0&loop=1&rel=0&showinfo=0&color=white&iv_load_policy=3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	        </div>

	    </div>
	    <div class="col-md-4"> 
	    	<h4 class="color-white text-left">Te recomendamos estos cursos</h4>
	    	<div class="row vertical-tutoriales">
	    	 @foreach($cat_cursos as $curso)
	    	 <div class="item" onclick="showVideo('{{$curso->video}}')">
		    	 <div class="col-md-6"> 
		    	 	<img class="img-responsive portada-recomendamos" src="{{ $curso->web }}" alt="{{ $curso->nombre }}">
		    	 </div>
		    	 <div class="col-md-6"> 
		    	 	<p class="color-white text-left text-recomendacion">{{ $curso->nombre }} <br> {{ $curso->descripcion }}</p>
		    	 </div>
		   	 </div>
		   	 @endforeach
		   	</div>
	    </div>
	</div>

	<div id="section-recomendaciones" class="">
	    <div class="row">
	        <div class="col-md-12 text-left"> 
	        		<h4 class="weight-900 color-white">Recomendados para ti</h4>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12 slide-aprende text-left"> 
	        	@foreach($cat_recomendaciones as $recomendacion)
	        	<div onclick="showVideo('{{$recomendacion->video}}')" class="col-md-3 img-holder"> 
		    	 	<img class="img-responsive" src="{{ $recomendacion->web }}" alt="{{ $recomendacion->nombre }}">
		    	 	<p class="captions-horizontal">{{ $recomendacion->nombre }}</p>
		    	</div>
		    	@endforeach
	        </div>
	    </div>
	</div>

</div>
</section>

<section id="section-categorias" class="space-80">
<div class="container">

    <h4>ECONOMÍA DIGITAL</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_digital as $digital)
	        <div onclick="showVideo('{{$digital->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $digital->web }}" alt="{{ $digital->nombre }}">
	        		<p class="captions-vertical">{{ $digital->nombre }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>

	<div class="space-40"></div>

    <h4>TUS CLIENTES</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_cliente as $cliente)
	        <div onclick="showVideo('{{$cliente->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $cliente->web }}" alt="{{ $cliente->nombre }}">
	        		<p class="captions-vertical">{{ $cliente->nombre }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>

    <div class="space-40"></div>

    <h4>DISEÑANDO NEGOCIOS</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_negocios as $cliente)
	        <div onclick="showVideo('{{$cliente->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $cliente->web }}" alt="{{ $cliente->nombre }}">
	        		<p class="captions-vertical">{{ $cliente->nombre }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>

    <div class="space-40"></div>

    <h4>ECONOMÍA NARANJA</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_naranja as $naranja)
	        <div onclick="showVideo('{{$naranja->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $naranja->web }}" alt="{{ $naranja->nombre }}">
	        		<p class="captions-vertical">{{ $naranja->nombre }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>

    <div class="space-40"></div>

    <h4>EMPRENDIMIENTO SOCIAL</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_social as $social)
	        <div onclick="showVideo('{{$social->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $social->web }}" alt="{{ $social->nombre }}">
	        		<p class="captions-vertical">{{ $social->nombre }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>

    <div class="space-40"></div>

    <h4>POR DONDE EMPEZAR</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_empezar as $empezar)
	        <div onclick="showVideo('{{$empezar->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $empezar->web }}" alt="{{ $empezar->nombre }}">
	        		<p class="captions-vertical">{{ $empezar->nombre }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>
</div>
</section>

<!-- Modal Video -->
<div id="videoModal" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg">
  <div class="modal-header header-modal">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-content">
    <div class="modal-body">
      <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 no-padding">
          	  <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
              <div class="video-bazar">
                    <iframe class="video-herramientas" src="" frameborder="0" allow="autoplay *; fullscreen *" allowfullscreen></iframe>
              </div>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End Modal Video -->

<div class="space-80"></div>

<script type="text/javascript">

	function showVideo(idVideo) {
		$("iframe.video-herramientas").src = "";
		$('iframe.video-herramientas').attr('src', '');

		$('.video-bazar').hide();
		$('.lds-ring').show();

	 	$(".video-herramientas").attr("src","https://www.youtube.com/embed/"+idVideo);
	 	
	 	$('.lds-ring').hide();
	 	$('.video-bazar').show();
	 	$('#videoModal').modal('show');
	}

	window.addEventListener("DOMContentLoaded", function(){
		$("#videoModal").on('hide.bs.modal', function () {
        	$("iframe.video-herramientas").src = "";
        	$('iframe.video-herramientas').attr('src', $('iframe').attr('src'));
        	console.log("stop");
    	});

	});
</script>

@endsection

@include("front_layout.footer")
