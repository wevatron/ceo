@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")

<section class="box-intro section-formulario">
<div class="container-formulario">
  <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="col-md-12">
    <div class="card card0 bg-white border-0">
        <div class="row d-flex">
            <div class="col-lg-4">
                <div class="card1 pb-5">
                    <div class="px-3 justify-content-center mt-4 mb-5"> <img class="img-responsive imageRegister" src="{{asset('layout/assets/img/herramientas/img_form.png') }}" alt="CEO 2020"> </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8 mx-auto space-20">
                <h4 class="bg-white">Aprende con los mejores profesionales y forma parte la mayor comunidad para creativos</h4>
                <hr>
                <div class="card2 card border-0 px-4 py-5">
                  <form id="registerForm" action="{{url('/register')}}" method="post" class="form">
                  {!! csrf_field() !!}

                    <div class="col-md-12 px-3"> 
                      <input name="name" value="{{old('name')}}" class="form__element" type="text" placeholder="Nombre Completo" required />
                      @if ($errors->has('name'))
                        <span class="help-block-error">
                            {{ $errors->first('name') }}
                        </span>
                      @endif
                    </div>
                    <div class="col-md-6 px-3"> 
                        <input name="apellido_paterno" value="{{old('apellido_paterno')}}" class="form__element" type="text" placeholder="Apellido Paterno"  />
                        @if ($errors->has('apellido_paterno'))
                          <span class="help-block-error">
                              {{ $errors->first('apellido_paterno') }}
                          </span>
                        @endif
                    </div>
                    <div class="col-md-6 px-3"> 
                        <input name="apellido_materno" value="{{old('apellido_materno')}}" class="form__element" type="text" placeholder="Apellido Materno"  />
                        @if ($errors->has('apellido_materno'))
                          <span class="help-block-error">
                              {{ $errors->first('apellido_materno') }}
                          </span>
                        @endif
                    </div>
                    <div class="col-md-6 px-3"> 
                        <!-- Año-Mes-Dia -->
                        <input name="edad" value="{{old('edad')}}" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" class="form__element" type="date" placeholder="Año de nacimiento" required />
                        @if ($errors->has('edad'))
                          <span class="help-block-error">
                              {{ $errors->first('edad') }}
                          </span>
                        @endif
                    </div>
                    <div class="col-md-6 px-3"> 
                        <select id="sexo" name="sexo" value="{{old('sexo')}}" class="form__element" type="text" placeholder="Sexo" required>
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                        <option value="3">No especificar</option>
                        </select>
                        @if ($errors->has('sexo'))
                          <span class="help-block-error">
                              {{ $errors->first('sexo') }}
                          </span>
                        @endif
                    </div>
                    <div class="col-md-12 px-3"> 
                        {!! Form::select('giro_negocio_id', $ocupaciones, null, ['class' => 'form__element', 'placeholder' => 'ocupacion', 'required', 'id'=>'ocupacion']) !!}
                        @if ($errors->has('giro_negocio_id'))
                          <span class="help-block-error">
                              {{ $errors->first('giro_negocio_id') }}
                          </span>
                        @endif
                    </div>
                    <div class="col-md-12 px-3"> 
                        <input name="nombre_ideas" value="{{old('nombre_ideas')}}" class="form__element" type="text" placeholder="Nombre de tu idea o emprendimiento" required />
                        @if ($errors->has('nombre_ideas'))
                          <span class="help-block-error">
                              {{ $errors->first('nombre_ideas') }}
                          </span>
                        @endif
                    </div>
                    <div class="col-md-6 px-3"> 
                      {!! Form::select('estado_id', $estados, null, ['class' => 'form__element', 'placeholder' => 'Estado', 'required', 'id'=>'estado']) !!}

                        @if ($errors->has('estado_id'))
                        <span class="help-block-error">
                            {{ $errors->first('estado_id') }}
                        </span>
                      @endif 
                    </div>
                    <div class="col-md-6 px-3"> 
                        {!! Form::select('municipio_id', $municipios, null, ['class' => 'form__element', 'placeholder' => 'Municipio', 'required', 'id'=>'municipio']) !!}
                        @if ($errors->has('municipio_id'))
                          <span class="help-block-error">
                              {{ $errors->first('municipio_id') }}
                          </span>
                        @endif
                    </div>
                    <div class="col-md-12 px-3">  
                        <input name="email" value="{{old('email')}}" class="form__element" type="email" placeholder="Correo electrónico" required />
                        @if ($errors->has('email'))
                          <span class="help-block-error">
                              {{ $errors->first('email') }}
                          </span>
                        @endif
                    </div>
                    <div class="col-md-12 px-3"> 
                        <input name="password" class="form__element" type="password" placeholder="password" required />
                        @if ($errors->has('password'))
                          <span class="help-block-error">
                              {{ $errors->first('password') }}
                          </span>
                        @endif
                    </div>
                    <div class="col-md-12 mb-3 px-3 space-20"> 
                      <button type="submit" class="btn btn-black text-center">Crear cuenta</button> 
                    </div>
                    <div class="col-md-12 mb-4 px-3 space-20"> 
                      <small class="font-weight-bold register-account">¿Ya tienes cuenta? <a href="{{url('/')}}/login" class="text-dangers ">Entrar</a></small> 
                    </div>

                    <div class="col-md-12 space-40"></div>

                  </form>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>
</div>
</section>

<div class="space-80"></div>

<script type="text/javascript">
  window.addEventListener("DOMContentLoaded", function(){
      $("#estado").change(function(){
          if($(this).val() == 20){
            $("#municipio").show();
          }else{
            $("#municipio").hide();
          }
      });
  });
</script>

@endsection
@include("front_layout.footer")