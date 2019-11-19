<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $quarter->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $quarter->name !!}</p>
</div>

<!-- Subdivision Id Field -->
<div class="form-group">
    {!! Form::label('subdivision_id', 'Subdivision:') !!}
    <p>{!! $quarter->subdivision->name !!}</p>
</div>

