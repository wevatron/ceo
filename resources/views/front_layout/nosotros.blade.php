@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")


<!-- Container Nosotros -->
<section id="quienes-somos" class="box-intro">
<div class="container">
    <div class="rows">
        <div class="col-md-3 space-100"> 
             <div class="text-left texter-to-center col-md-4 no-padding">
                <img class="img-responsives astronauta-header" src="{{ asset('layout/assets/img/quienes-somos/astronauta-header.png?format=webp&quality=auto') }}" width="400" alt="CEO 2020">
            </div>
        </div>
        <div class="col-md-9 space-quienes"> 
        	 <div class="title-heading">
	        	 <h1 class="glitch text-left glitch-left-white weight-900" data-text="Nuestro">Nuestro</h1>
	        	 <h1 class="glitch text-left glitch-left-white weight-900" data-text="Sueño">Sueño</h1>
        	 </div>
             <p class="text-right" data-aos="fade-up">
              En el sur del país estamos orgullosos de nuestra herencia cultural 
      				y conocemos nuestro potencial creativo, también somos conscientes 
      				de los grandes retos que queremos contribuir a resolver, para ello, sabemos 
      				que tenemos que trabajar y esforzarnos día con día para lograr esos sueños 
      				que compartimos con muchos otros.
      			 </p>
      			 <p class="text-right" data-aos="fade-up">
      				En el Instituto Oaxaqueño del Emprendedor y de la Competitividad (IODEMC), 
      				la Universidad Anáhuac de Oaxaca y los aliados, no somos ajenos a estos sueños, trabajamos juntos en la construcción de un Ecosistema Emprendedor que acompañe y fortalezca a quienes se comprometen a emprender para transformar su propia realidad y en consecuencia, la de México.
       			</p>
       			<p class="text-right" data-aos="fade-up">
      				Este 2020 se realizará la tercera edición del Encuentro CEO, Conectando Emprendedores en Oaxaca, el evento de emprendimiento más emocionante del país, y aunque nuestros planes tuvieron que adaptarse a un mundo que ya cambió, al igual que muchas y muchos emprendedores, pensamos que podemos modelar nuestro futuro; es por ello que llevamos al mundo digital este espacio que invitará a los asistentes a reflexionar sobre la necesidad de imaginar un futuro mejor e inspirarlos a colaborar y tomar acciones inmediatas.
            </p>
        </div>
    </div>

</div>
</section>
<!-- end box-quienes-somos -->

<section id="section-mision" class="space-50">
<div class="container">
    <div class="row">
        <div class="col-md-4 text-left"> 
                <img class="img-responsive" src="{{ asset('layout/assets/img/quienes-somos/ceo-mision.jpg?format=webp&quality=auto') }}" width="390" alt="CEO 2020">
        </div>
        <div class="col-md-4 col-md-offset-right-4 text-left"> 
        		<h2 class="weight-500" data-aos="fade-up">Misión</h2>
               <p>Promover la cultura del emprendimiento en México, a través de la creación de un
espacio en el sur del país, que sirva de encuentro entre miembros del ecosistema emprendedor regional y nacional, donde intercambien experiencias, se generen colaboraciones y conocimientos que permitan el fortalecimiento y surgimiento de nuevas empresas.</p>
        </div>
    </div>
    <div class="space-20"></div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-left"> 
        		<h2 class="weight-500" data-aos="fade-up">Visión</h2>
                <p>Ser el punto de encuentro hacia un ecosistema emprendedor de la región sur del país, en donde se detonen sinergias que generen desarrollo.</p>
        </div>
        <div class="col-md-4 text-left"> 
        		 <img class="img-responsive" src="{{ asset('layout/assets/img/quienes-somos/ceo-vision.jpg?format=webp&quality=auto') }}" width="390" alt="CEO 2020">
        </div>
    </div>

</div>
</section>

<section id="section-anahuac" class="space-50">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-left"> 


        	<!-- Tab -->
        <div class="row tab-menu">
        <div class="col-md-3">
          <h1 class="color-pink weight-900" data-aos="zoom-in">Detrás</h1>
	        <h1 class="color-pink weight-900 no-margin-top" data-aos="zoom-in">de CEO</h1>
	        <div class="space-50"></div>
          <ul class="nav nav-tabs left-tabs left-tabs">
            <li class="nav-item active">
              <a class="nav-link" href="#iodemc" data-toggle="tab">IODEMC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#anahuac" data-toggle="tab">Universidad Anáhuac</a>
            </li>
          </ul>
        </div>

        <div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane active" id="iodemc">
                  <div class="row">  
							<div class="col-md-12 text-left"> 
								<img class="img-responsive" src="{{ asset('layout/assets/img/quienes-somos/Logo_IODEMC.png?format=webp&quality=auto') }}" width="380" alt="CEO 2020">
	               <p class="space-50">Somos una institución especializada en la política pública de apoyo a nuevos
	emprendimientos de base sólida y tecnológica para consolidar a las micro
	y pequeñas empresas. Funcionamos como un organismo descentralizado,
	que busca siempre incrementar en las empresas su competitividad e inserción
	exitosa hacia los mercados nacionales e internacionales.</p>
				<p class="weight-500">De la mano con CEO</p>
				<p>Dentro de los objetivos de IODEMC está el fomentar la cultura emprendedora 
				a través de la organización de eventos que impulsen la generación de nuevas
				iniciativas emprendedoras y la exposición de productos de origen oaxaqueño.
				Todo para promover un espacio donde se generen vínculos entre los miembros
				del ecosistema local y nacional.</p>
							<div class="contact-info">
								<p class="space-50 text-left"><i class="ion-map"></i> Antequera #300, Barrio de Jalatlaco, C.P. 68080, Oaxaca.</p>
								<p class="text-left"><i class="ion-android-call"></i> (951) 206 2428 / (951) 206 1089</p>
							</div>
						</div>
					</div>
              </div>
              <div class="tab-pane" id="anahuac">
                  <div class="row"> 
							<div class="col-md-12 text-left"> 
								<img class="img-responsive" src="{{ asset('layout/assets/img/quienes-somos/Logo_anahuac.jpg?format=webp&quality=auto') }}" width="250" alt="CEO 2020">
	               <p class="space-50">Somos una institución particular de educación superior que tiene por objetivo
	primordial elevar la condición humana y social de los hombres y mujeres 
	de Oaxaca. Comprometidos con una formación integral, a través de un enfoque 
	de liderazgo de acción positiva, que propone un modelo de emprendimiento
	transversal en toda su oferta académica; transmitiendo una visión responsable,
	proactiva e innovadora con su entorno social inmediato.</p>
				<p class="weight-500">Anáhuac y su visión de emprendimiento</p>
				<p>Estamos comprometidos con los emprendedores y el desarrollo de nuevas soluciones de alto impacto que generen empleos y eleven la competitividad del estado de Oaxaca a nivel internacional. Colaboramos con el ecosistema emprendedor a través de actividades que promueven el espíritu de liderazgo y la cultura emprendedora centrada en la innovación.</p>
							<div class="contact-info">
								<p class="space-50 text-left"><i class="ion-map"></i> Blvd. Guadalupe Hinojosa de Murat #1100, San Raymundo Jalpan, C.P. 71248, Oaxaca. </p>
								<p class="text-left"><i class="ion-android-call"></i> (951) 501 6250</p>
							</div>
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
</section> <!-- end nosotros -->

<div class="space-80"></div>

@endsection

@include("front_layout.footer")