@extends("front_layout.main")
@include("front_layout.header-v2")
@section("body")


<!-- box-Ponentes -->
<section id="interior-ponentes" class="box-intro">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2 space-100"> 
            <div class="title-header-ponentes">
                <h1 class="glitch text-left glitch-left-white weight-900" data-text="Voces del Futuro">Voces del Futuro</h1>
            </div>
        </div>
        <div class="col-md-8 color-white space-ponentes col-md-offset-4" data-aos="fade-up"> 
             <p class="text-right">En 2020 nuestro mundo se transformó, el futuro llegó y ahora queremos hacer uno nuevo, ¿pero por dónde empezar? Los aliados de CEO 2020 tienen mucho que compartirte;  son expertos en distintas áreas del emprendimiento, son las voces que en este tiempo se necesitan. <b>Neo Emprendedor</b>, no te pierdas esta gran oportunidad de conectar con las mentes del futuro.</p>
        </div>
    </div>

</div>
</section>
<!-- end box-Ponentes -->



<div class="space-80"></div>

<script type="text/javascript">
  function showPonente(id_ponente){
        $("#"+id_ponente).modal('show');
  }
</script>
@endsection

@include("front_layout.footer")