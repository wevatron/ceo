@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")

<section class="container container-registro box-intro">

  <div class="form__container">
    
    <!-- Back side -->
    <div class="form__signups">

      <div class="col-md-4 no-padding">
        <img class="img-responsive" src="{{asset('layout/assets/img/herramientas/side-form.png') }}" alt="CEO 2020">
      </div>

      <div class="col-md-8">
          <h1 class="form__header">Aprende con los mejores profesionales</h1>
          <form id="registerForm" action="{{url('/register')}}" method="post" class="form">
            {!! csrf_field() !!}
            <fieldset class="form__group col-md-12">
              <input name="name" value="{{old('name')}}" class="form__element" type="text" placeholder="Nombre" required />
              @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
              @endif
            </fieldset>
            <fieldset class="form__group col-md-6">
              <input name="apellido_paterno" value="{{old('apellido_paterno')}}" class="form__element" type="text" placeholder="Apellido Paterno" required />
              @if ($errors->has('apellido_paterno'))
                <span class="help-block">
                    <strong>{{ $errors->first('apellido_paterno') }}</strong>
                </span>
              @endif
            </fieldset>
            <fieldset class="form__group col-md-6">
              <input name="apellido_materno" value="{{old('apellido_materno')}}" class="form__element" type="text" placeholder="Apellido Materno" required />
              @if ($errors->has('apellido_materno'))
                <span class="help-block">
                    <strong>{{ $errors->first('apellido_materno') }}</strong>
                </span>
              @endif
            </fieldset>
            <fieldset class="form__group col-md-6">
              <!-- Año-Mes-Dia -->
              <input name="edad" value="{{old('edad')}}" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" class="form__element" type="date" placeholder="Año de nacimiento" required />
              @if ($errors->has('edad'))
                <span class="help-block">
                    <strong>{{ $errors->first('edad') }}</strong>
                </span>
              @endif
            </fieldset>
            <fieldset class="form__group col-md-6">
              <select id="sexo" name="sexo" value="{{old('sexo')}}" class="form__element" type="text" placeholder="Sexo" required>
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
                <option value="3">No especificar</option>
              </select>
              @if ($errors->has('sexo'))
                <span class="help-block">
                    <strong>{{ $errors->first('sexo') }}</strong>
                </span>
              @endif
            </fieldset>

            <h3 class="col-md-12">Ocupación</h3>

            <fieldset class="form__group col-md-12">
              {!! Form::select('giro_negocio_id', $ocupaciones, null, ['class' => 'form__element', 'placeholder' => 'ocupacion', 'required', 'id'=>'ocupacion']) !!}
              @if ($errors->has('giro_negocio_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('giro_negocio_id') }}</strong>
                </span>
              @endif
            </fieldset>
            <fieldset class="form__group col-md-12">
              <input name="nombre_ideas" value="{{old('nombre_ideas')}}" class="form__element" type="text" placeholder="Nombre de tu idea o emprendimiento" required />
              @if ($errors->has('nombre_ideas'))
                <span class="help-block">
                    <strong>{{ $errors->first('nombre_ideas') }}</strong>
                </span>
              @endif
            </fieldset>
            <fieldset class="form__group col-md-12">
                {!! Form::select('estado_id', $estados, null, ['class' => 'form__element', 'placeholder' => 'Estado', 'required', 'id'=>'estado']) !!}

                @if ($errors->has('estado_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('estado_id') }}</strong>
                </span>
              @endif
            </fieldset>
           
            <fieldset class="form__group col-md-12">
                {!! Form::select('municipio_id', $municipios, null, ['class' => 'form__element', 'placeholder' => 'Municipio', 'required', 'id'=>'municipio']) !!}
                @if ($errors->has('municipio_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('municipio_id') }}</strong>
                </span>
              @endif
            </fieldset>
        
            <fieldset class="form__group col-md-12">
              <input name="email" value="{{old('email')}}" class="form__element" type="text" placeholder="Correo electrónico" required />
              @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </fieldset>

            <fieldset class="form__group col-md-12">
              <input name="password" class="form__element" type="text" placeholder="password" required />
              @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </fieldset>

            <fieldset class="form__group col-md-12">
              <input class="form__button" type="submit" value="Crear cuenta" />
            </fieldset>

            <a href="{{url('/')}}/login"><label class="">¿Ya tienes cuenta? | Entrar</label></a>
          </form>
       </div>
    </div>
  </div>

</section>
@endsection
@include("front_layout.footer")