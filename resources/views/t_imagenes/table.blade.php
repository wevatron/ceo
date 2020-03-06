<div class="table-responsive">
    <table class="table" id="tImagenes-table">
        <thead>
            <tr>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>T Evento Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tImagenes as $tImagenes)
            <tr>
            <td>{{ $tImagenes->descripcion }}</td>
            <td>
                <img src="{{ $tImagenes->url_img }}" width="160px" alt="">
            </td>
            <td>{{ $tImagenes->t_evento_id }}</td>
                <td>
                    {!! Form::open(['route' => ['tImagenes.destroy', $tImagenes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ $tImagenes->url_img }}" target="_blank" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
