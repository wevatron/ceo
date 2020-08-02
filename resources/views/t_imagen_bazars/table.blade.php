<div class="table-responsive">
    <table class="table" id="tImagenBazars-table">
        <thead>
            <tr>
                <th>Imagenes de bazar id</th>
                <th>imagen</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tImagenBazars as $tImagenBazar)
            <tr>
                <td>{{ $tImagenBazar->t_bazar_id }}</td>
                <td>
                <img src="{{$tImagenBazar->imagen}}" width="120px" alt="">
                </td>
                <td>
                    {!! Form::open(['route' => ['tImagenBazars.destroy', $tImagenBazar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tImagenBazars.show', [$tImagenBazar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tImagenBazars.edit', [$tImagenBazar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
