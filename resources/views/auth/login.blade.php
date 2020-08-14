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
                    <div class="px-3 justify-content-center mt-4 mb-5"> <img class="img-responsive imageForm" src="{{asset('layout/assets/img/herramientas/img_form.png') }}" alt="CEO 2020"> </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 mx-auto space-80">
                <div class="card2 card border-0 px-4 py-5">
                  <form action="{{url('/login')}}" id="loginForm" method="post" class="form">
                  {!! csrf_field() !!}

                    <div class="row px-3"> 
                      <label class="mb-1"><h6 class="mb-0 text-sm">Correo Electrónico</h6></label> 
                      <input class="mb-4" type="text" name="email" value="{{old('mail')}}" placeholder="Correo Electrónico"> 
                      @if ($errors->has('email'))
                        <span class="help-block-error">
                            {{ $errors->first('email') }}
                        </span>
                      @endif
                    </div>
                    <div class="row px-3"> 
                      <label class="mb-1"><h6 class="mb-0 text-sm">Contraseña</h6></label> 
                      <input type="password" name="password" placeholder="Contraseña"> 
                      @if ($errors->has('password'))
                        <span class="help-block-error">
                            {{ $errors->first('password') }}
                        </span>
                      @endif
                    </div>
                    <div class="row mb-3 px-3 space-20"> 
                      <button type="submit" class="btn btn-black text-center">Entrar</button> 
                    </div>
                    <div class="row mb-4 px-3 space-50"> 
                      <small class="font-weight-bold register-account">¿No tienes una cuenta? <a href="{{url('/')}}/register" class="text-dangers ">Registrate</a></small> 
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

@endsection
@include("front_layout.footer")