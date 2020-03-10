@extends('layouts.app')

@section('content')

<section class="content-header">
    <a href="{{ route('tPersonas.index') }}" class="btn btn-primary">Regresar</a>
        
        <h3>Usuario</h3>
        <div class="table-responsive">
            <table class="table" id="tPersonas-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido parterno</th>
                        <th>Apellido materno</th>
                        <th>Curp</th>
                        <th>Rfc</th>
                        <th>Universidad</th>
                        <th>Tipo de Usuario</th>
                        <th>Municipio</th>
                        <th>Giro Negocio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $tPersona->name }}</td>
                        <td>{{ $tPersona->apellido_paterno }}</td>
                        <td>{{ $tPersona->apellido_materno }}</td>
                        <td>{{ $tPersona->curp }}</td>
                        <td>{{ $tPersona->rfc }}</td>
                        <td>{{ $tPersona->Universidad->descripcion }}</td>
                        <td>{{ $tPersona->TipoUsuario->descripcion }}</td>
                        <td>{{ $tPersona->Municipio->nombre }}</td>
                        <td>{{ $tPersona->Giro->descripcion }}</td>
                        <td>{{ $tPersona->evento_id }}</td>
                    </tr>
                </tbody>
            </table>


            <table class="table" id="tPersonas-table">
                <thead>
                    <tr>
                        <th>Numero de Eventos</th>
                        <th>Numero de likes</th>
                        <th>Numero de vinculaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$numBoletos}}</td>
                        <td>{{$likes}}</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </section>
    <div class="content">
    <section>
        <h3>Boletos para eventos</h3>
        <div class="table-responsive">
            <table class="table" id="tEventos-table">
                <thead>
                    <tr>
                <th>Nombre Evento</th>
                <th>Descripcion de evento</th>
                <th>Nombre del conforencista</th>
                <th>Cargo</th>
                <th>Empresa</th>
                <th>Biografia</th>
                <th>Cupo</th>
                <th>CupoFake</th>
                <th>Tipo de Evento </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($tEventos as $tEvento)
                    <tr>
                        <td>{{ substr($tEvento->Eventos->nombre_evento,0,12).".." }}</td>
                        <td>{{ substr($tEvento->Eventos->descripcion_evento,0,12).".." }}</td>
                        <td>{{ substr($tEvento->Eventos->nombre_conferencista,0,12).".." }}</td>
                        <td>{{ substr($tEvento->Eventos->cargo,0,12).".." }}</td>
                        <td>{{ substr($tEvento->Eventos->empresa,0,12).".." }}</td>
                        <td>{{ substr($tEvento->Eventos->bio,0,12).".." }}</td>
                        <td>{{ $tEvento->Eventos->cupo }}</td>
                        <td>{{ $tEvento->Eventos->cupoFake }}</td>
                        <td>{{ $tEvento->Eventos->TipoEvento->descripcion }}</td>
                
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$tEventos->render()}}
        </div>
        
    </section>


 </div>
@endsection
