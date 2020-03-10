<div class="table-responsive">
    <table class="table" id="tBoletos-table">
        <thead>
            <tr>
                <th>T Evento Id</th>
        <th>Usuario Id</th>
        <th>Dislike</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tBoletos as $tBoleto)
            <tr>
                <td>{{ $tBoleto->t_evento_id }}</td>
            <td>{{ $tBoleto->usuario_id }}</td>
            <td>{{ $tBoleto->dislike }}</td>
                <td>
                    {!! Form::open(['route' => ['tBoletos.destroy', $tBoleto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tBoletos.show', [$tBoleto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tBoletos.edit', [$tBoleto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
