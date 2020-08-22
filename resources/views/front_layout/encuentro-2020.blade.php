@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")
<!-- box-ceo -->
<section id="interior-ceo" class="box-intro">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2 space-100"> 
        	<div class="title-header-ceo">
	            <h1 class="text-left color-white weight-900">¿Qué es</h1>
	   			<h1 class="text-left color-white no-margin-top weight-900">CEO Digital?</h1>
   			</div>
        </div>
        <div class="col-md-8 color-white space-ceo col-md-offset-4" data-aos="fade-up"> 
             <p class="text-left">
                Es el encuentro de emprendimiento más emocionante del país, un puente para conectar a emprendedores y empresarios de la región con el ecosistema nacional e internacional, quienes comparten la pasión y la energía con socios y aliados que están comprometidos con transformar a través de su trabajo y esfuerzo la realidad de nuestro país. </p>
			       <p class="text-left">
				Un espacio digital que conjunta las ideas de unos con las experiencias de otros en un entorno de innovación para compartir al mundo.</p>
 			      <p class="text-left">Creaciones y creadores conectando entre sí, que hacen posible este espacio.</p>
      </div>
    </div>

</div>
</section>
<!-- end box-ceo -->

<section id="section-ejes" class="space-100">
<div class="container">
	<div class="position-relative">
	<div class="astronauta-absolut text-left"> 
            <img class="img-responsive" src="{{ asset('layout/assets/img/ceo/astronauta.png?format=webp&quality=auto') }}" width="400" alt="CEO 2020">
    </div>
	</div>
    <div class="row">
        <div class="col-md-7 col-md-offset-5 text-left"> 
        		<h1 class="glitch glitch-left weight-300" data-text="EJES">EJES</h1>
                <h1 class="glitch glitch-left weight-900 no-margin-top" data-text="PRINCIPALES">PRINCIPALES</h1>
        </div>
    </div>
    <div class="space-50"></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-4 text-right"> 
                <p class="weight-500">Ahora más que antes, somos conscientes de la necesidad de cambiar el rumbo que tomamos en las últimas décadas; en CEO buscamos crear un ecosistema que alienta el pensamiento disruptivo y la disposición de afrontar los retos para un futuro mejor; este es un nuevo inicio, el inicio del Universo Emprendedor.</p>
        </div>
    </div>

</div>
</section>

<section id="section-economia-social" class="space-100-economia">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-left"> 


        <!-- Tab -->
        <div class="row tab-menu">
        <div class="col-md-3">
          <ul class="nav nav-tabs left-tabs left-tabs">
            <li class="nav-item active">
              <a class="nav-link" href="#naranja" data-toggle="tab">Economía Naranja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#social" data-toggle="tab">Economía Social</a>
            </li>
          </ul>
        </div>

        <div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane active" id="naranja">
                  <div class="row">  
							<div class="col-md-4">            
								<img class="img-responsive" src="{{ asset('layout/assets/img/ceo/img-economia.jpg?format=webp&quality=auto') }}" height="350" alt="CEO 2020">
							</div>
							<div class="col-md-8 text-left">   
								<h1 class="no-margin-top space-20-mobile" data-aos="fade-up">Economía Naranja</h1>   
	               				<p class="space-20">"La economía creativa, herencia cultural e intangible de la región. </p>
	               				<p>Es el conjunto de actividades que de manera encadenada permiten que las ideas se transformen en bienes y servicios culturales, cuyo valor está determinado por su contenido de propiedad intelectual." </p>
                        <p class="subtexto">Banco Interamericano de Desarrollo. La economía naranja: una oportunidad infinita. Bogotá, Colombia: Editorial Puntoaparte</p>
							</div>
							<div class="col-md-12 space-30 text-left"> 
								<p class="weight-900">Este universo está integrado por emprendimientos como son:</p>
								<ul>
									<li>La Economía Cultural y las Industrias Creativas, en cuya intersección se encuentran las Industrias Culturales Convencionales.</li>
									<li> Las áreas de soporte para la creatividad.</li>
								</ul>
							</div>
					</div>
              </div>
              <div class="tab-pane" id="social">
                  <div class="row">  
							<div class="col-md-4">            
								<img class="img-responsive" src="{{ asset('layout/assets/img/ceo/img-social.jpg?format=webp&quality=auto') }}" height="350" alt="CEO 2020">
							</div>
							<div class="col-md-8 text-left">   
								<h1 class="no-margin-top space-20-mobile" data-aos="fade-up">Economía Social</h1>   
	               				<p class="space-20">"Lograr mejores resultados en pro del bien común.</p>
								<p>La economía social es un movimiento integrado por actores cuyo objetivo principal es generar un impacto significativo sobre la sociedad, el medio ambiente y la comunidad local. </p>
							</div>
							<div class="col-md-12 space-30 text-left"> 
								<p>Al responder mediante la innovación social a necesidades aún no satisfechas, las empresas sociales forman parte de un crecimiento tanto inteligente como sostenible, pues su visión a largo plazo en el aspecto de impacto ambiental les permite desarrollar soluciones eficientes para reducir las emisiones y los residuos u optimizar los recursos naturales. Como su nombre lo dice, ponen especial énfasis en las personas y la cohesión social, siendo el núcleo de un crecimiento inclusivo al generar puestos de trabajo sostenibles para las mujeres, los jóvenes y las personas mayores."</p>
                <p class="subtexto">Mercado Interno. (2015). La iniciativa de emprendimiento social de la Comisión
Europea. Comisión Europea.</p>
								<p>Este universo está integrado por emprendimientos como son:</p>
								<ul>
									<li>Emprender desde la base de la pirámide (BDP) </li>
									<li>Emprender con la base de la pirámide (BDP 2.0) </li>
									<li>Emprender para la base de la pirámide (BDP 1.0) </li>
									<li>Emprender para el planeta</li>
								</ul>
								
							</div>
						</div>
              </div>
           
            </div>
        </div>
      </div>
      <!-- End Tab -->

        	
        </div>
    </div>


</div>
</section>
@endsection

@include("front_layout.footer")