<div class="table-responsive">
    <table class="table" id="tEventos-table">
        <thead>
            <tr>
        <th>Nombre Evento</th>
        <th>Cupo</th>
        <th>Imagen</th>
        <th>Tipo de Evento </th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tEventos as $tEvento)
            <tr>
                <td>{{ $tEvento->nombre_evento }}</td>
            <td>{{ $tEvento->cupo }}</td>
            <td><img width="70px" src="http://ceo.grakaja.com/{{$tEvento->url_img}}" alt=""></td>
            <td>{{ $tEvento->MunicipoEvento->descripcion }}</td>
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
</div>
