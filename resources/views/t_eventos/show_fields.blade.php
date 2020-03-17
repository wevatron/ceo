<div class="table-responsive">
    <table class="table" id="tEventos-table">
        <thead>
            <tr>
            <th>Id de evento</th>
            <th>Nombre Evento</th>
            <th>Descripcion de evento</th>
            <th>Nombre del conforencista</th>
            <th>Cargo</th>
            <th>Empresa</th>
            <th>Biografia</th>
            <th>Cupo</th>
            <th>Tipo de Evento </th>
        </thead>
        <tbody>
            <tr>
                <td>{{$tEvento->id}}</td>
                <td>{{ substr($tEvento->nombre_evento,0,12).".." }}</td>
                <td>{{ substr($tEvento->descripcion_evento,0,12).".." }}</td>
                <td>{{ substr($tEvento->nombre_conferencista,0,12).".." }}</td>
                <td>{{ substr($tEvento->cargo,0,12).".." }}</td>
                <td>{{ substr($tEvento->empresa,0,12).".." }}</td>
                <td>{{ substr($tEvento->bio,0,12).".." }}</td>
                <td>{{ $tEvento->cupo }}</td>
                <td>{{ $tEvento->TipoEvento->descripcion }}</td>
           
            </tr>
        </tbody>
    </table>
</div>
<section class="content-header">
    <h1 class="pull-left">Imagenes</h1>
    <h1 class="pull-right">
       <a class="btn btn-primary pull-right" 
       style="margin-top: -10px;margin-bottom: 5px" 
       href="{{ route('tImagenes.create',['id'=>$tEvento->id] ) }}">
        Agregar imagen
    </a>
    </h1>
</section>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
                @include('t_imagenes.table')
        </div>
    </div>
    <div class="text-center">
    
    </div>
</div>
