@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")

<section id="herramientas-emprender" class="box-intro">
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h4 class="color-white text-left">Hola Roberto, ¡Que bueno verte!</h4>
		</div>
		<div class="col-md-4">
			<form id="logout-form" class="text-right" action="{{ url('/logout') }}" method="POST">
	                {{ csrf_field() }}
	                <button type="submit" class="btn btn-logout"><img src="{{ asset('layout/assets/img/herramientas/logout.svg') }}" class="logout-svg" /> Cerrar Sesión</button>
	         </form>
     	</div>
	    <div class="col-md-8"> 

	    	<div class="live-video">
	             <iframe width="100%" height="100%" src="https://www.youtube.com/embed/zE2ovXhy_Ys?autoplay=0&loop=1&rel=0&showinfo=0&color=white&iv_load_policy=3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
		    	 <div class="col-md-6"> 
		    	 	<small class="color-white">{{ $recomendacion->nombre }}</small>
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
	        	<div class="col-md-3"> 
		    	 	<img class="img-responsive" src="{{ $recomendacion->web }}" alt="{{ $recomendacion->nombre }}">
		    	</div>
		    	@endforeach
	        </div>
	    </div>
	</div>

</div>
</section>

<section id="section-categorias" class="space-80">
<div class="container">

    <h4>Categoría 1</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_aprende as $aprende)
	        <div class="col-md-3 text-left"> 
	        		<img class="img-responsive" src="{{ $aprende->web }}" alt="{{ $aprende->nombre }}">
	        </div>
	        @endforeach
    	</div>
    </div>

    <h4>Categoría 2</h4>
    <div class="row container">
    	<div class="slide-aprende">
	    	@foreach($cat_herramientas as $herramientas)
	        <div class="col-md-3 text-left"> 
	        		<img class="img-responsive" src="{{ $herramientas->web }}" alt="{{ $herramientas->nombre }}">
	        </div>
	        @endforeach
    	</div>
    </div>
</div>
</section>

<div class="space-80"></div>

@endsection

@include("front_layout.footer")
