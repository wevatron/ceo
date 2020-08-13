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
	                <button type="submit" class="btn">Cerrar Sesión</button>
	         </form>
     	</div>
	    <div class="col-md-8 no-padding"> 

	    	<div class="live-video">
	             <iframe width="100%" height="100%" src="https://www.youtube.com/embed/zE2ovXhy_Ys?autoplay=0&loop=1&rel=0&showinfo=0&color=white&iv_load_policy=3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	        </div>

	    </div>

	    <div class="col-md-4"> 
	    	<h4 class="color-white text-left">Te recomendamos estos cursos</h4>
	    	 <div class="row">
		    	 <div class="col-md-6"> 
		    	 	<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
		    	 </div>
		    	 <div class="col-md-6"> 
		    	 	TEXTO
		    	 </div>
		   	 </div>
		   	 <div class="row">
		    	 <div class="col-md-6"> 
		    	 	<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
		    	 </div>
		    	 <div class="col-md-6"> 
		    	 	TEXTO
		    	 </div>
		   	 </div>
		   	 <div class="row">
		    	 <div class="col-md-6"> 
		    	 	<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
		    	 </div>
		    	 <div class="col-md-6"> 
		    	 	TEXTO
		    	 </div>
		   	 </div>
	    </div>
	</div>
</div>
</section>

<section id="section-recomendaciones" class="space-10">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-left"> 
        		<h2 class="title-header weight-300">Recomendados para ti</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-left"> 
        		<h5 class="title-header weight-300">CAROUSEL CON IMAGENES</h5>
        </div>
    </div>
</div>
</section>

<section id="section-categorias" class="space-10">
<div class="container">

    <h4>Categoría 1</h4>
    <div class="row">
        <div class="col-md-3 text-left"> 
        		<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
        </div>
        <div class="col-md-3 text-left"> 
        		<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
        </div>
        <div class="col-md-3 text-left"> 
        		<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
        </div>
        <div class="col-md-3 text-left"> 
        		<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
        </div>
    </div>

    <h4>Categoría 2</h4>
    <div class="row">
        <div class="col-md-3 text-left"> 
        		<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
        </div>
        <div class="col-md-3 text-left"> 
        		<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
        </div>
        <div class="col-md-3 text-left"> 
        		<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
        </div>
        <div class="col-md-3 text-left"> 
        		<img class="img-responsive" src="{{ asset('layout/assets/img/home/banner-bazar.png') }}" alt="CEO 2020">
        </div>
    </div>
</div>
</section>

<div class="space-80"></div>

@endsection

@include("front_layout.footer")
