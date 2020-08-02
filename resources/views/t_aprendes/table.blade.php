<div class="table-responsive">
    <table class="table" id="tAprendes-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
        <th>Video</th>
        <th>Categoria</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tAprendes as $tAprende)
            <tr>
                <td>{{ $tAprende->nombre }}</td>
            <td>{{ $tAprende->descripcion }}</td>
            <td>{{ $tAprende->video }}</td>
            <td>{{ $tAprende->Categoria->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['tAprendes.destroy', $tAprende->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tAprendes.show', [$tAprende->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tAprendes.edit', [$tAprende->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
