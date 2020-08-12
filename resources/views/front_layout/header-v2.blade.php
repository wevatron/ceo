
@section("header")
<div class="container-fluid">
    
    <!-- box header -->
    <header class="box-header">
        <div class="box-logo logo-mobile">
            <a  href="{{url('/')}}/"><img src="{{ asset('layout/assets/img/general/logo-interno.png') }}" width="150" alt="CEO 2020"></a>
        </div>
        <!-- box-nav -->
        <a class="box-primary-nav-trigger" href="#">
           <span class="box-menu-icon"></span>
        </a>
        <!-- box-primary-nav-trigger -->
    </header>
    <!-- end box header -->

    <div class="box-primary-nav">

        <div class="col-md-4 col-md-offset-2">
            <h1 class="tex-center color_yellow detras-ceo weight-900">Detrás <br>de CEO</h1>
            <div class="text-md-left col-2">
                <div class="col-md-12 col-lg-12 col-xs-6">
                     <a href="https://www.oaxaca.gob.mx/iodemc/" target="_blank"><img src="{{ asset('layout/assets/img/home/Organizadores_iodemc_white.svg') }}" class="img-responsive" width="220" alt="CEO 2020"></a>
                </div>
                <div class="col-md-12 col-lg-12 col-xs-6">
                     <a href="https://www.anahuac.mx/oaxaca/" target="_blank"><img src="{{ asset('layout/assets/img/home/Organizadores_anahuac_white.svg') }}" class="img-responsive" width="220" alt="CEO 2020"></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 border-left space-menu-mobile">
             <!-- nav -->
            <nav>
                <ul class="">
                    <li><a href="{{url('/')}}/encuentro-2020">Encuentro 2020</a>  </li>
                    <li><a href="{{url('/')}}/nosotros">Nosotros</a> </li>
                    <li><a href="{{url('/')}}/ponentes">Voces del Futuro</a> </li>
                    <li class=""><a href="{{url('/')}}/herramientas-emprender">Aprende+ CEO 2020</a> </li>
                    <li class=""><a href="{{url('/')}}/bazar-digital">Bazar Digital CEO</a> </li>
                    <li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn">Cerrar Sesión</button>
                         </form>
                    </li>
                </ul>
                <ul class="social-icon">
                    <li class="box-social"> <a class="ion-social-facebook"  target="_blank" href="https://www.facebook.com/ConectandoEnOaxaca"></a> </li>
                      <li class="box-social"> <a class="ion-social-twitter"   target="_blank" href="https://twitter.com/conectandoenoax"></a> </li>
                      <li class="box-social"> <a class="ion-social-instagram-outline" target="_blank" href="https://www.instagram.com/conectandoenoaxaca/"></a> </li>
                      <li class="box-social"> <a class="ion-social-youtube"   target="_blank" href="https://www.youtube.com/channel/UCTyKrM5aXG1iPI1OhG4j3sQ"></a> </li>
                </ul>
            </nav>
            <!-- end nav -->
        </div>
    </div>
   
</div>
@endsection