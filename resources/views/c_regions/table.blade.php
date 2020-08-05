<div class="table-responsive">
    <table class="table" id="cRegions-table">
        <thead>
            <tr>
                <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cRegions as $cRegion)
            <tr>
                <td>{{ $cRegion->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['cRegions.destroy', $cRegion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cRegions.show', [$cRegion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cRegions.edit', [$cRegion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
