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
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tPersonas as $tPersona)
            <tr>
                <td>{{ $tPersona->name }}</td>
            <td>{{ $tPersona->apellido_paterno }}</td>
            <td>{{ $tPersona->apellido_materno }}</td>
            <td>{{ $tPersona->curp }}</td>
            <td>{{ $tPersona->rfc }}</td>
            <td>{{ $tPersona->Universidad->descripcion }}</td>
            <td>{{ $tPersona->TipoUsuario->descripcion }}</td>
            <td>{{ $tPersona->Municipio->descripcion }}</td>
            <td>{{ $tPersona->Giro->descripcion }}</td>
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
