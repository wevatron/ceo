@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")

<section id="herramientas-emprender" class="box-intro">
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h4 class="color-white text-left">Hola {{auth()->user()->name}}, ¡Que bueno verte!</h4>
		</div>
		<div class="col-md-4">
			<form id="logout-form" class="text-right" action="{{ url('/logout') }}" method="POST">
	                {{ csrf_field() }}
	                <button type="submit" class="btn btn-logout"><img src="{{ asset('layout/assets/img/herramientas/logout.svg') }}" class="logout-svg" /> Cerrar Sesión</button>
	         </form>
     	</div>
	    <div class="col-md-8"> 

	    	<div class="live-video">
	             <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ffmOBadlN-0?autoplay=0&loop=1&rel=0&showinfo=0&color=white&iv_load_policy=3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	        </div>

	    </div>
	    <div class="col-md-4"> 
	    	<h4 class="color-white text-left">Te recomendamos estos cursos</h4>
	    	<div class="row vertical-tutoriales">
	    	 @foreach($recomendaciones_ceo as $recomendacion)
	    	 <div class="item">
		    	 <div class="col-md-6"> 
		    	 	<img class="img-responsive portada-recomendamos" src="{{ $recomendacion->web }}" alt="{{ $recomendacion->nombre }}">
		    	 </div>
		    	 <div class="col-md-6 no-padding"> 
		    	 	<p class="color-white text-left text-recomendacion">{{ $recomendacion->nombre }} <br> {{ $recomendacion->descripcion }}</p>
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
	        	@foreach($recomendaciones_ceo as $recomendacion)
	        	<div onclick="showVideo('{{$recomendacion->video}}')" class="col-md-3 img-holder"> 
		    	 	<img class="img-responsive" src="{{ $recomendacion->web }}" alt="{{ $recomendacion->nombre }}">
		    	 	<p class="captions-horizontal">{{ $recomendacion->nombre }} / {{ $recomendacion->descripcion }}</p>
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
	    	@foreach($cat_aprende as $aprende)
	        <div onclick="showVideo('{{$aprende->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $aprende->web }}" alt="{{ $aprende->nombre }}">
	        		<p class="captions-vertical">{{ $aprende->nombre }} / {{ $aprende->descripcion }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>

	<div class="space-40"></div>

    <h4>TUS CLIENTES</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_herramientas as $herramientas)
	        <div onclick="showVideo('{{$herramientas->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $herramientas->web }}" alt="{{ $herramientas->nombre }}">
	        		<p class="captions-vertical">{{ $herramientas->nombre }} / {{ $herramientas->descripcion }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>

    <div class="space-40"></div>

    <h4>DISEÑANDO NEGOCIOS</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_herramientas as $herramientas)
	        <div onclick="showVideo('{{$herramientas->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $herramientas->web }}" alt="{{ $herramientas->nombre }}">
	        		<p class="captions-vertical">{{ $herramientas->nombre }} / {{ $herramientas->descripcion }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>

    <div class="space-40"></div>

    <h4>ECONOMÍA NARANJA</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_herramientas as $herramientas)
	        <div onclick="showVideo('{{$herramientas->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $herramientas->web }}" alt="{{ $herramientas->nombre }}">
	        		<p class="captions-vertical">{{ $herramientas->nombre }} / {{ $herramientas->descripcion }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>

    <div class="space-40"></div>

    <h4>EMPRENDIMIENTO SOCIAL</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_herramientas as $herramientas)
	        <div onclick="showVideo('{{$herramientas->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $herramientas->web }}" alt="{{ $herramientas->nombre }}">
	        		<p class="captions-vertical">{{ $herramientas->nombre }} / {{ $herramientas->descripcion }}</p>
	        </div>
	        @endforeach
    	</div>
    </div>

    <div class="space-40"></div>

    <h4>POR DONDE EMPEZAR</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_herramientas as $herramientas)
	        <div onclick="showVideo('{{$herramientas->video}}')" class="col-md-3 text-left img-holder"> 
	        		<img class="img-responsive" src="{{ $herramientas->web }}" alt="{{ $herramientas->nombre }}">
	        		<p class="captions-vertical">{{ $herramientas->nombre }} / {{ $herramientas->descripcion }}</p>
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

    	/* $('#section-categorias .slide-aprende img').hover(function() {
		    $('.captions-vertical').css('transform', 'scale(1.1)');
		  }, function() {
		    $('.captions-vertical').css('transform', 'scale(1)');
		});

		$('#herramientas-emprender .slide-aprende img').hover(function() {
		    $('.captions-horizontal').css('transform', 'scale(1.1)');
		  }, function() {
		    $('.captions-horizontal').css('transform', 'scale(1)');
		}); */

	});
</script>

@endsection

@include("front_layout.footer")
