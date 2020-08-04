<div class="table-responsive">
    <table class="table" id="tEventos-table">
        <thead>
            <tr>
                <th>Nombre Evento</th>
                <th>Descripcion de evento</th>
                <th>Nombre del conferencista</th>
                <th>Tipo de Evento </th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tEventos as $tEvento)
            <tr>
                <td>{{ $tEvento->nombre_evento }}</td>
                <td>{{ $tEvento->descripcion_evento }}</td>
                <td>{{ substr($tEvento->nombre_conferencista,0,45).".." }}</td>
                <td>{{ $tEvento->TipoEvento->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['tEventos.destroy', $tEvento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('notificaciones',["evento"=>$tEvento->id])}}" class='btn btn-warning btn-xs'><i class="fa fa-bell"></i></a>
                        <a href="{{ route('tEventos.show', [$tEvento->id]) }}" class='btn btn-default btn-s'><i class="fa fa-photo"></i></a>
                        <a href="{{ route('tEventos.edit', [$tEvento->id]) }}" class='btn btn-default btn-s'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-s', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$tEventos->render()}}
</div>
