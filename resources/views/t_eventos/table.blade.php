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
        <th>Tipo de Evento </th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tEventos as $tEvento)
            <tr>
                <td>{{ substr($tEvento->nombre_evento,0,12).".." }}</td>
                <td>{{ substr($tEvento->descripcion_evento,0,12).".." }}</td>
                <td>{{ substr($tEvento->nombre_conferencista,0,12).".." }}</td>
                <td>{{ substr($tEvento->cargo,0,12).".." }}</td>
                <td>{{ substr($tEvento->empresa,0,12).".." }}</td>
                <td>{{ substr($tEvento->bio,0,12).".." }}</td>
                <td>{{ $tEvento->cupo }}</td>
                <td>{{ $tEvento->TipoEvento->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['tEventos.destroy', $tEvento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tEventos.show', [$tEvento->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tEventos.edit', [$tEvento->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$tEventos->render()}}
</div>
