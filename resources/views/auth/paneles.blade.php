@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")

<section class="box-intro section-formulario top-scroll">
<div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">

    <div class="row streaming-card-mobile">
        <div class="col-md-8 space-ceo col-md-offset-4" data-aos="fade-up"> 
             <div class="text-left">
                <h1 class="glitch glitch-left weight-900" data-text="Muchas Gracias">Muchas Gracias</h1>
             </div>
             <p class="text-left space-20">
                Por haber sido parte de nuestros paneles en #CEODigital2020, ahora viene el plato fuerte, nos vemos en las conferencias en vivo.
              </p>
              <p class="text-left space-10">Conoce a las voces del futuro que estarán con nosotros.</p>
        </div>
    </div>

    <div class="col-md-12">
    <div class="card bg-white border-0">

        <!-- 27 de agosto -->
        <div class="row">
          <div class="col-md-4">
            <div class="streaming-card">
              <div class="streaming-tumb">
                <img class="img-responsive" src="https://somosrino.org/storageCeo/fotoEvento/1597197795.jpg?format=webp&quality=auto" alt="David Geisen-Mercado Libre">
              </div>
              <div class="streaming-details">
                <h4>"Comercio electrónico, motor de recuperación económica".</h4>
                <p>David Geisen-Mercado Libre</p><br>
                <div class="streaming-bottom-details">
                  <div class="streaming-date">Jueves 27 de agosto 10:00 hrs.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="streaming-card">
              <div class="streaming-tumb">
                <img class="img-responsive" src="https://somosrino.org/storageCeo/fotoEvento/1598054167.jpg?format=webp&quality=auto" alt="Víctor Tavares/Arturo Robles - Citibanamex">
              </div>
              <div class="streaming-details">
                <h4>"El usuario 🐭 de tu producto no eres tú 🙀".</h4>
                <p>Víctor Tavares/Arturo Robles - Citibanamex</p>
                <div class="streaming-bottom-details">
                  <div class="streaming-date">Jueves 27 de agosto 12:30 hrs.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="streaming-card">
              <div class="streaming-tumb">
                <img class="img-responsive" src="https://somosrino.org/storageCeo/fotoEvento/1598120161.jpg?format=webp&quality=auto" alt="Zarina Rivera / Tümu">
              </div>
              <div class="streaming-details">
                <h4>"DESAPRENDER".</h4><br>
                <p>Zarina Rivera / Tümu</p><br>
                <div class="streaming-bottom-details">
                  <div class="streaming-date">Jueves 27 de agosto 18:00 hrs.</div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- end row -->

        <!-- 28 de agosto -->
        <div class="row">
          <div class="col-md-4">
            <div class="streaming-card">
              <div class="streaming-tumb">
                <img class="img-responsive" src="https://somosrino.org/storageCeo/fotoEvento/1597184240.jpg?format=webp&quality=auto" alt="Raúl de Anda / Irrazonable">
              </div>
              <div class="streaming-details">
                <h4>"Innovando para resolver PPUs (Pin***s Problemas Urgentes)".</h4>
                <p>Raúl de Anda / Irrazonable</p><br>
                <div class="streaming-bottom-details">
                  <div class="streaming-date">Viernes 28 de agosto 10:00 hrs.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="streaming-card">
              <div class="streaming-tumb">
                <img class="img-responsive" src="https://somosrino.org/storageCeo/fotoEvento/1597184325.jpg?format=webp&quality=auto" alt="Alejandra Luzardo / BID">
              </div>
              <div class="streaming-details">
                <h4>"Emprendimiento creativo para salvar el mundo".</h4>
                <p>Alejandra Luzardo / BID</p><br>
                <div class="streaming-bottom-details">
                  <div class="streaming-date">Viernes 28 de agosto 12:30 hrs.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="streaming-card">
              <div class="streaming-tumb">
                <img class="img-responsive" src="https://somosrino.org/storageCeo/fotoEvento/1598276962.jpg?format=webp&quality=auto" alt="Jonathan Álvarez- Fernanda Rocha /Blackbot intelligence">
              </div>
              <div class="streaming-details">
                <h4>"Black Bot inteligencia de negocios".</h4>
                <p>Jonathan Álvarez- Fernanda Rocha /Blackbot intelligence</p>
                <div class="streaming-bottom-details">
                  <div class="streaming-date">Viernes 28 de agosto 18:00 hrs.</div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- end row -->

        <div class="row d-flex">
            <div class="col-lg-5">
                <div class="card1 pb-5">
                    <div class="px-3 justify-content-center mt-4 mb-5"> <img class="img-responsive panelesForm" src="{{asset('layout/assets/img/paneles/CEO_Registro_Paneles_banner.png') }}" alt="CEO 2020"> </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 mx-auto space-20">
                <div class="card2 card border-0 px-4 py-5">
                  <div id="messages"> </div>
                  <form  id="panelesForm" method="POST" action="">
                  {!! csrf_field() !!}

                    <div class="row px-3 text-left"> 
                      <label class="mb-1"><h6 class="mb-0 text-sm">Nombre:</h6></label> 
                      <input type="text" name="nombre" placeholder="Nombre"> 
                    </div>

                    <div class="row px-3 text-left"> 
                      <label class="mb-1"><h6 class="mb-0 text-sm">Correo Electrónico:</h6></label> 
                      <input class="mb-4" type="text" name="correo" placeholder="Correo Electrónico"> 
                    </div>

                    <div class="row px-3 space-10 text-left"> 
                      <label class="mb-1"><h6 class="mb-0 text-sm">Selecciona los paneles de tu interés:</h6></label> 

                      
                      <div class="col-md-12 no-padding">
                        <div class="page__toggle">
                          <label class="toggle">
                            <input class="toggle__input" type="checkbox" value="3" name="paneles[]" disabled="">
                            <span class="toggle__label">
                              <span class="toggle__text">Inversión de impacto para lograr desarrollo sostenible - <small>Miércoles 26 de agosto  16:00 hrs </small></span>
                            </span>
                          </label>
                        </div>
                      </div>

                      <div class="col-md-12 no-padding">
                        <div class="page__toggle">
                          <label class="toggle">
                            <input class="toggle__input" type="checkbox" value="4" name="paneles[]" disabled="">
                            <span class="toggle__label">
                              <span class="toggle__text">Redefiniendo la ruta del Emprendedor Social - <small>Miércoles 26 de agosto  18:00 hrs</small></span>
                            </span>
                          </label>
                        </div>
                      </div>

                    </div>

                    
                    <div class="row mb-3 px-3 space-20"> 
                      <button type="submit" id="btn-registrarme" disabled="" class="btn btn-black text-center">Registrarme</button> 
                    </div>

                  </form>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>
</section>

<section id="section-ediciones" class="container"> </section>

<div class="space-80"></div>

@endsection
@include("front_layout.footer")