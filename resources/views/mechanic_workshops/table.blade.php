<div class="table-responsive">
    <table class="table" id="mechanicWorkshops-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Address</th>
        <th>Quarter</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mechanicWorkshops as $mechanicWorkshop)
            <tr>
                <td>{!! $mechanicWorkshop->name !!}</td>
            <td>{!! $mechanicWorkshop->address !!}</td>
            <td>{!! $mechanicWorkshop->quarter->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['mechanicWorkshops.destroy', $mechanicWorkshop->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('mechanicWorkshops.show', [$mechanicWorkshop->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('mechanicWorkshops.edit', [$mechanicWorkshop->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
