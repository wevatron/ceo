@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")

<section class="container container-registro box-intro">

  <div class="form__container">
    
    <!-- Front side -->
    <div class="form__login">
      <div class="col-md-4 no-padding">
        <img class="img-responsive" src="{{asset('layout/assets/img/herramientas/side-form.png') }}" alt="CEO 2020">
      </div>
      <div class="col-md-8">
      <h1 class="form__header">Login</h1>

      <form action="{{url('/login')}}" id="loginForm" method="post" class="form">
        {!! csrf_field() !!}
        
        <fieldset class="form__group">
          <input id="email" value="{{old('mail')}}" name="email" class="form__element" type="email" placeholder="Email" required />
          @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
          @endif
        </fieldset>

        <fieldset class="form__group">
          <input id="password" name="password" class="form__element" type="password" placeholder="Password" required />
        </fieldset>
        
        <fieldset class="form__group">
          <input class="form__button" type="submit" value="Login" />
        </fieldset>
        <a href="{{url('/')}}/register"><label class="">Crear una cuenta</label></a>
      </form>

      </div>
    </div>

  </div>

</section>
@endsection
@include("front_layout.footer")