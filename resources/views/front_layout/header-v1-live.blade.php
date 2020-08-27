
@section("header")
<section class="live-streaming">
<div class="noise-">
<div class="container-fluid">
    <!-- box header -->
    <header class="box-header">

      

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
                     <a href="https://www.oaxaca.gob.mx/iodemc/" rel="noreferrer" target="_blank"><img src="{{ asset('layout/assets/img/home/Organizadores_iodemc_white.svg') }}" class="img-responsive" width="220" alt="CEO 2020"></a>
                </div>
                <div class="col-md-12 col-lg-12 col-xs-6">
                     <a href="https://www.anahuac.mx/oaxaca/" rel="noreferrer" target="_blank"><img src="{{ asset('layout/assets/img/home/Organizadores_anahuac_white.svg') }}" class="img-responsive" width="220" alt="CEO 2020"></a>
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
                    <li class="hidden"><a href="{{url('/')}}/herramientas-emprender">Aprende+ CEO 2020</a> </li>
                    <li><a href="{{url('/')}}/bazar-digital">Bazar Digital CEO</a> </li>
                </ul>
                <ul class="social-icon">
                      <li class="box-social"> <a class="ion-social-facebook"  rel="noreferrer" target="_blank" aria-label="Facebook" href="https://www.facebook.com/ConectandoEnOaxaca"></a> </li>
                      <li class="box-social"> <a class="ion-social-twitter"   rel="noreferrer" target="_blank" aria-label="Twitter" href="https://twitter.com/conectandoenoax"></a> </li>
                      <li class="box-social"> <a class="ion-social-instagram-outline" rel="noreferrer" target="_blank" aria-label="Instagram" href="https://www.instagram.com/conectandoenoaxaca/"></a> </li>
                      <li class="box-social"> <a class="ion-social-youtube"   rel="noreferrer" target="_blank" aria-label="Youtube" href="https://www.youtube.com/channel/UCTyKrM5aXG1iPI1OhG4j3sQ"></a> </li>
                </ul>
            </nav>
            <!-- end nav -->
        </div>
    </div>
   

    <!-- box-intro -->
    <section class="box-intro">

        <div class="rows mt-100">
            <div class="col-md-5 col-md-offset-1"> 
                 <div class="text-left col-md-3 col-xs-6 no-padding">
                    <img src="{{ asset('layout/assets/img/home/CEO_logo.png?format=webp&quality=auto') }}" height="110" alt="CEO 2020">
                </div>
                <div class="text-left col-md-9 block-desktop label-live">
                    <h1 class="glitch glitch-left-black weight-900" data-text="Live">Live</h1>
                    <h1 class="glitch glitch-left-black weight-900 live-left" data-text="Streaming">Streaming</h1>
                </div>
            </div>
            <div class="col-md-5 col-xs-offset-right-1 block-desktop"> 
                 <div class="text-right col-2">
                    <img src="{{ asset('layout/assets/img/home/Date_CEO.png?format=webp&quality=auto') }}" height="100" alt="CEO 2020">
                </div>
            </div>
        </div>
         <!-- Live -->
        <div class="col-md-offset-1 col-md-10 col-md-offset-right-1">
            
            <div class="col-md-9 no-padding live_streaming_ceo">
                <div class="live-video live-live">
                     <iframe title="Live Streaming CEO 2020" id="live_ceo_2020" width="100%" height="100%" src="" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                </div>
            </div>
            
            <div class="col-md-3 no-padding live_streaming_ceo">
                <div class="live-video live-chat">
                      <iframe title="Chat CEO 2020" id="live_ceo_chat" src="" class="live-show-chat" frameborder="0" scrolling="0" scrolling="0" width="100%"  height="100%"></iframe>
                </div>
            </div> 

            <div class="col-md-12 no-padding offline_streaming_ceo">
                <div class="live-video">
                     <iframe title="CEO 2020" id="offline_ceo_2020" width="100%" height="100%" src="" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                </div>
            </div>
            
        </div>

    </section>
    <!-- end box-intro -->

</div>
</div>
</section>  <!-- end live-streaming -->
@endsection
