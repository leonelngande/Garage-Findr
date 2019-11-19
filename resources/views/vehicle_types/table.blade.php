<div class="table-responsive">
    <table class="table" id="vehicleTypes-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehicleTypes as $vehicleType)
            <tr>
                <td>{!! $vehicleType->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['vehicleTypes.destroy', $vehicleType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('vehicleTypes.show', [$vehicleType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('vehicleTypes.edit', [$vehicleType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
