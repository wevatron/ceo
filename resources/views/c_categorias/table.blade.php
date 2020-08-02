<div class="table-responsive">
    <table class="table" id="cCategorias-table">
        <thead>
            <tr>
                <th>Descripcion</th>
        <th>Accion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cCategorias as $cCategoria)
            <tr>
                <td>{{ $cCategoria->descripcion }}</td>
            <td>{{ $cCategoria->accion }}</td>
                <td>
                    {!! Form::open(['route' => ['cCategorias.destroy', $cCategoria->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cCategorias.show', [$cCategoria->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cCategorias.edit', [$cCategoria->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
