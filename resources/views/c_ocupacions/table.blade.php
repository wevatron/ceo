<div class="table-responsive">
    <table class="table" id="cOcupacions-table">
        <thead>
            <tr>
                <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cOcupacions as $cOcupacion)
            <tr>
                <td>{{ $cOcupacion->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['cOcupacions.destroy', $cOcupacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cOcupacions.show', [$cOcupacion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cOcupacions.edit', [$cOcupacion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
