<div class="table-responsive">
    <table class="table" id="tPersonas-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellido</th>
        <th>Curp</th>
        <th>Rfc</th>
        <th>Universidad</th>
        <th>Tipo de Usuario</th>
        <th>Municipio</th>
        <th>Giro Negocio</th>
        <th>Evento</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tPersonas as $tPersona)
            <tr>
                <td>{{ $tPersona->nombre }}</td>
            <td>{{ $tPersona->apellido }}</td>
            <td>{{ $tPersona->curp }}</td>
            <td>{{ $tPersona->rfc }}</td>
            <td>{{ $tPersona->universidad_id }}</td>
            <td>{{ $tPersona->tipo_usuario_id }}</td>
            <td>{{ $tPersona->municipio_id }}</td>
            <td>{{ $tPersona->giro_negocio_id }}</td>
            <td>{{ $tPersona->evento_id }}</td>
                <td>
                    {!! Form::open(['route' => ['tPersonas.destroy', $tPersona->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tPersonas.show', [$tPersona->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tPersonas.edit', [$tPersona->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
