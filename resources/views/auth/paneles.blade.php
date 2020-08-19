@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")

<section class="box-intro section-formulario">
<div class="container-formulario">
  <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="col-md-offset-1 col-md-10 col-md-offset-right-1">
    <div class="card card0 bg-white border-0">
        <div class="row d-flex">
            <div class="col-lg-5">
                <div class="card1 pb-5">
                    <div class="px-3 justify-content-center mt-4 mb-5"> <img class="img-responsive panelesForm" src="{{asset('layout/assets/img/paneles/CEO_Registro_Paneles_banner.jpg') }}" alt="CEO 2020"> </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 mx-auto top-scroll space-30">
                <div class="card2 card border-0 px-4 py-5">
                  <div id="messages"> </div>
                  <form  id="panelesForm" method="POST" action="">
                  {!! csrf_field() !!}

                    <div class="row px-3 text-left"> 
                      <label class="mb-1"><h6 class="mb-0 text-sm">Nombre</h6></label> 
                      <input type="text" name="nombre" placeholder="Nombre"> 
                    </div>

                    <div class="row px-3 text-left"> 
                      <label class="mb-1"><h6 class="mb-0 text-sm">Correo Electrónico</h6></label> 
                      <input class="mb-4" type="text" name="correo" placeholder="Correo Electrónico"> 
                    </div>

                    <div class="row px-3 space-20 text-left"> 
                      <label class="mb-1"><h6 class="mb-0 text-sm">Paneles:</h6></label> 
                      
                      <div class="col-md-12 no-padding">
                        <div class="page__toggle">
                          <label class="toggle">
                            <input class="toggle__input" type="checkbox" value="1" name="paneles[]" checked="">
                            <span class="toggle__label">
                              <span class="toggle__text">La economía solidaria como emprendimiento - <small>Lunes 24 de agosto 2020  18:00 hrs</small></span>
                            </span>
                          </label>
                        </div>
                      </div>

                      <div class="col-md-12 no-padding">
                        <div class="page__toggle">
                          <label class="toggle">
                            <input class="toggle__input" type="checkbox" value="2" name="paneles[]">
                            <span class="toggle__label">
                              <span class="toggle__text">Emprendimientos desde las industrias creativas - <small>Martes 25 de agosto 2020 18:00 hrs.</small></span>
                            </span>
                          </label>
                        </div>
                      </div>

                      <div class="col-md-12 no-padding">
                        <div class="page__toggle">
                          <label class="toggle">
                            <input class="toggle__input" type="checkbox" value="3" name="paneles[]">
                            <span class="toggle__label">
                              <span class="toggle__text">Inversión de impacto para lograr desarrollo sostenible - <small>Miércoles 26 de agosto  16:00 hrs </small></span>
                            </span>
                          </label>
                        </div>
                      </div>

                      <div class="col-md-12 no-padding">
                        <div class="page__toggle">
                          <label class="toggle">
                            <input class="toggle__input" type="checkbox" value="4" name="paneles[]">
                            <span class="toggle__label">
                              <span class="toggle__text">Redefiniendo la ruta del Emprendedor Social - <small>Miércoles 26 de agosto  18:00 hrs</small></span>
                            </span>
                          </label>
                        </div>
                      </div>

                    </div>

                    
                    <div class="row mb-3 px-3 space-20"> 
                      <button type="submit" id="btn-registrarme" class="btn btn-black text-center">Registrarme</button> 
                    </div>

                  </form>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>
</div>
</section>

<div class="space-50"></div>

@endsection
@include("front_layout.footer")