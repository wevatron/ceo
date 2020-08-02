<div class="table-responsive">
    <table class="table" id="cCategoriaAprendes-table">
        <thead>
            <tr>
                <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cCategoriaAprendes as $cCategoriaAprende)
            <tr>
                <td>{{ $cCategoriaAprende->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['cCategoriaAprendes.destroy', $cCategoriaAprende->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cCategoriaAprendes.show', [$cCategoriaAprende->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cCategoriaAprendes.edit', [$cCategoriaAprende->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
