<div class="table-responsive">
    <table class="table" id="tLikes-table">
        <thead>
            <tr>
                <th>T Evento Id</th>
        <th>Usuario Id</th>
        <th>Dislike</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tLikes as $tLike)
            <tr>
                <td>{{ $tLike->t_evento_id }}</td>
            <td>{{ $tLike->usuario_id }}</td>
            <td>{{ $tLike->dislike }}</td>
                <td>
                    {!! Form::open(['route' => ['tLikes.destroy', $tLike->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tLikes.show', [$tLike->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tLikes.edit', [$tLike->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
