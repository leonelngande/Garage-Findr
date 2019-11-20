<div class="table-responsive">
    <table class="table" id="quarters-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Subdivision</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($quarters as $quarter)
            <tr>
                <td>{!! $quarter->name !!}</td>
            <td>{!! $quarter->subdivision->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['quarters.destroy', $quarter->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('quarters.show', [$quarter->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('quarters.edit', [$quarter->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
