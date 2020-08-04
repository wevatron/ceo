<div class="table-responsive">
    <table class="table" id="tBazars-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tBazars as $tBazar)
            <tr>
                <td>{{ $tBazar->nombre }}</td>
            <td>{{ $tBazar->descripcion }}</td>
            <td>{{ $tBazar->Categoria->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['tBazars.destroy', $tBazar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tBazars.show', [$tBazar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tBazars.edit', [$tBazar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
