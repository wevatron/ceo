<div class="table-responsive">
    <table class="table" id="cTipoUsuarios-table">
        <thead>
            <tr>
                <th>Valor</th>
                <th>Descripción</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cTipoUsuarios as $cTipoUsuario)
            <tr>
                <td>{{ $cTipoUsuario->valor }}</td>
            <td>{{ $cTipoUsuario->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['cTipoUsuarios.destroy', $cTipoUsuario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cTipoUsuarios.show', [$cTipoUsuario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cTipoUsuarios.edit', [$cTipoUsuario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
