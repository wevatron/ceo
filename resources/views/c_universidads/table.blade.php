<div class="table-responsive">
    <table class="table" id="cUniversidads-table">
        <thead>
            <tr>
                <th>Descripción</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cUniversidads as $cUniversidad)
            <tr>
                <td>{{ $cUniversidad->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['cUniversidads.destroy', $cUniversidad->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cUniversidads.show', [$cUniversidad->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cUniversidads.edit', [$cUniversidad->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
