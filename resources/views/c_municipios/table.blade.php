<div class="table-responsive">
    <table class="table" id="cMunicipios-table">
        <thead>
            <tr>
                <th>Descripción</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cMunicipios as $cMunicipio)
            <tr>
                <td>{{ $cMunicipio->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['cMunicipios.destroy', $cMunicipio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cMunicipios.show', [$cMunicipio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cMunicipios.edit', [$cMunicipio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$cMunicipios->render()}}
</div>
