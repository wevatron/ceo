
<li class="{{ Request::is('tEventos*') ? 'active' : '' }}">
    <a href="{{ route('tEventos.index') }}"><i class="fa fa-edit"></i><span>Eventos</span></a>
</li>


<li class="{{ Request::is('tPersonas*') ? 'active' : '' }}">
    <a href="{{ route('tPersonas.index') }}"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>


<li class="{{ Request::is('cGiroNegocios*') ? 'active' : '' }}">
    <a href="{{ route('cGiroNegocios.index') }}"><i class="fa fa-edit"></i><span>Negocios</span></a>
</li>


<li class="{{ Request::is('cTipoUsuarios*') ? 'active' : '' }}">
    <a href="{{ route('cTipoUsuarios.index') }}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>

<li class="{{ Request::is('cUniversidads*') ? 'active' : '' }}">
    <a href="{{ route('cUniversidads.index') }}"><i class="fa fa-edit"></i><span>Universidades</span></a>
</li>

<li class="{{ Request::is('cTipoEventos*') ? 'active' : '' }}">
    <a href="{{ route('cTipoEventos.index') }}"><i class="fa fa-edit"></i><span>Catalogo de Eventos</span></a>
</li>


<li class="{{ Request::is('cMunicipios*') ? 'active' : '' }}">
    <a href="{{ route('cMunicipios.index') }}"><i class="fa fa-edit"></i><span>Catalogo de Municipios</span></a>
</li>

