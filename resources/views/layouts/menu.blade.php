
<li class="{{ Request::is('tEventos*') ? 'active' : '' }}">
    <a href="{{ route('tEventos.index') }}"><i class="fa  fa-television"></i><span>Eventos / Aliados</span></a>
</li>

<li class="{{ Request::is('cTipoEventos*') ? 'active' : '' }}">
    <a href="{{ route('cTipoEventos.index') }}"><i class="fa  fa-book"></i><span>Catálogo de Eventos</span></a>
</li>



{{-- <li class="{{ Request::is('cGiroNegocios*') ? 'active' : '' }}">
    <a href="{{ route('cGiroNegocios.index') }}"><i class="fa fa-edit"></i><span>Negocios</span></a>
</li> --}}


{{-- <li class="{{ Request::is('cUniversidads*') ? 'active' : '' }}">
    <a href="{{ route('cUniversidads.index') }}"><i class="fa fa-edit"></i><span>Catálogo de universidades</span></a>
</li> --}}


{{-- 
<li class="{{ Request::is('cMunicipios*') ? 'active' : '' }}">
    <a href="{{ route('cMunicipios.index') }}"><i class="fa fa-edit"></i><span>Catálogo de Municipios</span></a>
</li> --}}

{{-- <li class="{{ Request::is('tImagenes*') ? 'active' : '' }}">
    <a href="{{ route('tImagenes.index') }}"><i class="fa fa-edit"></i><span>T Imagenes</span></a>
</li> --}}

{{-- <li class="{{ Request::is('tLikes*') ? 'active' : '' }}">
    <a href="{{ route('tLikes.index') }}"><i class="fa fa-edit"></i><span>T Likes</span></a>
</li> --}}

{{-- <li class="{{ Request::is('tBoletos*') ? 'active' : '' }}">
    <a href="{{ route('tBoletos.index') }}"><i class="fa fa-edit"></i><span>T Boletos</span></a>
</li> --}}

{{-- <li class="{{ Request::is('cEstadosReps*') ? 'active' : '' }}">
    <a href="{{ route('cEstadosReps.index') }}"><i class="fa fa-edit"></i><span>C Estados Reps</span></a>
</li>

<li class="{{ Request::is('estados*') ? 'active' : '' }}">
    <a href="{{ route('estados.index') }}"><i class="fa fa-edit"></i><span>Estados</span></a>
</li> --}}

<li class="{{ Request::is('tBazars*') ? 'active' : '' }}">
    <a href="{{ route('tBazars.index') }}"><i class="fa  fa-balance-scale"></i><span>Bazares</span></a>
</li>

<li class="{{ Request::is('cCategorias*') ? 'active' : '' }}">
    <a href="{{ route('cCategorias.index') }}"><i class="fa fa-sitemap"></i><span>Categorias de bazar</span></a>
</li>

{{-- 
<li class="{{ Request::is('tImagenBazars*') ? 'active' : '' }}">
    <a href="{{ route('tImagenBazars.index') }}"><i class="fa fa-edit"></i><span>T Imagen Bazars</span></a>
</li> --}}

<li class="{{ Request::is('tAprendes*') ? 'active' : '' }}">
    <a href="{{ route('tAprendes.index') }}"><i class="fa fa-mortar-board "></i><span>Aprende mas</span></a>
</li>

<li class="{{ Request::is('cCategoriaAprendes*') ? 'active' : '' }}">
    <a href="{{ route('cCategoriaAprendes.index') }}"><i class="fa fa-sitemap"></i><span>Categoria de aprender</span></a>
</li>


<li class="{{ Request::is('tPersonas*') ? 'active' : '' }}">
    <a href="{{ route('tPersonas.index') }}"><i class="fa fa-user"></i><span>Tabla de usuarios</span></a>
</li>

<li class="{{ Request::is('cTipoUsuarios*') ? 'active' : '' }}">
    <a href="{{ route('cTipoUsuarios.index') }}"><i class="fa  fa-sitemap"></i><span>Catálogo tipo usuarios</span></a>
</li>