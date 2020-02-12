<div class="table-responsive">
    <table class="table" id="cGiroNegocios-table">
        <thead>
            <tr>
                <th>Descripción</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cGiroNegocios as $cGiroNegocio)
            <tr>
                <td>{{ $cGiroNegocio->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['cGiroNegocios.destroy', $cGiroNegocio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cGiroNegocios.show', [$cGiroNegocio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cGiroNegocios.edit', [$cGiroNegocio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
