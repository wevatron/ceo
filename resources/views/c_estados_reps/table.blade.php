<div class="table-responsive">
    <table class="table" id="cEstadosReps-table">
        <thead>
            <tr>
                <th>Clave</th>
        <th>Nombre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cEstadosReps as $cEstadosRep)
            <tr>
                <td>{{ $cEstadosRep->clave }}</td>
            <td>{{ $cEstadosRep->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['cEstadosReps.destroy', $cEstadosRep->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cEstadosReps.show', [$cEstadosRep->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cEstadosReps.edit', [$cEstadosRep->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
