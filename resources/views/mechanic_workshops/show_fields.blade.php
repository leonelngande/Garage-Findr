<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $mechanicWorkshop->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $mechanicWorkshop->name !!}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{!! $mechanicWorkshop->address !!}</p>
</div>

<!-- Quarter Id Field -->
<div class="form-group">
    {!! Form::label('quarter_id', 'Quarter:') !!}
    <p>{!! $mechanicWorkshop->quarter->name !!}</p>
</div>

