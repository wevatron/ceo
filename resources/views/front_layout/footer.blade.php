@section("footer")
<!-- <RRSS>  ============================-->
<!-- ============================================-->
<ul class='rrss'>
  <li> <a rel="noreferrer" target="_blank" href="https://www.facebook.com/ConectandoEnOaxaca"><img src="{{ asset('layout/assets/img/general/icon-facebook.svg') }}" alt="Facebook"></a> </li> 
  <li> <a rel="noreferrer" target="_blank" href="https://www.instagram.com/conectandoenoaxaca/"><img src="{{ asset('layout/assets/img/general/icon-instagram.svg') }}" alt="Instagram"></a> </li>
  <li> <a rel="noreferrer" target="_blank" href="https://twitter.com/conectandoenoax"><img src="{{ asset('layout/assets/img/general/icon-twitter.svg') }}" alt="Twitter"></a> </li>
  <li> <a rel="noreferrer" target="_blank" href="https://www.youtube.com/channel/UCTyKrM5aXG1iPI1OhG4j3sQ"><img src="{{ asset('layout/assets/img/general/icon-youtube.svg') }}" alt="Youtube"></a> </li>
</ul>

<div class="col-md-12 col-xs-12 col-lg-12 block_organizadores">
        <div class="col-md-4 col-xs-4 col-lg-4">
             <a href="https://www.oaxaca.gob.mx/iodemc/" rel="noreferrer" target="_blank"><img src="{{ asset('layout/assets/img/home/Organizadores_iodemc.svg') }}" class="img-responsive" height="30" alt="CEO 2020"></a>
        </div>
        <div class="col-md-4 col-xs-4 col-lg-4">
             <a href="https://www.anahuac.mx/oaxaca/" rel="noreferrer" target="_blank"><img src="{{ asset('layout/assets/img/home/Organizadores_anahuac.svg') }}" class="img-responsive" height="30" alt="CEO 2020"></a>
        </div>
        <div class="col-md-4 col-xs-4 col-lg-4">
             <a href="https://www.banamex.com/" rel="noreferrer" target="_blank"><img src="{{ asset('layout/assets/img/home/Organizadores_banamex.svg') }}" class="img-responsive" height="30" alt="CEO 2020"></a>
        </div>
</div>

<!-- footer -->
<footer>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-5 text-left col-md-offset-1"> 
               <a class="color-black download-resouces hidden" href="https://drive.google.com/drive/folders/1uuMutuFgJ3x3nzOmbfy69MG4pwnhwGLk" rel="noreferrer" target="_blank"><p>¡Muestra que eres un Neo Emprendedor! Descarga el material aquí. <i class="ion-ios-download color-pink weight-900"></i></p></a>
        </div>
        <div class="col-md-5 text-center col-md-offset-1"> 
              <p class="copyright"><span class="ceo-copyright">CEO 2020</span> | Todos los derechos reservados.</p>
        </div>
    </div>
    </div>
</footer>
<!-- end footer -->

<div class="col-md-12 hidden">
    <audio id="cooper" controls><source src="{{ asset('layout/assets/img/general/cooper.mp3') }}" type="audio/mp3"></audio>
</div>
@endsection
