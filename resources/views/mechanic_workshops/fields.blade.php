<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name: *') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone: *') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Quarter Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quarter_id', 'Quarter: *') !!}
    {!! Form::select('quarter_id', $quarters, null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Vehicle Types Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicle_types', 'Vehicle Types:') !!}
    {!! Form::select('vehicle_types[]', $vehicleTypes, isset($mechanicWorkshop) ? $mechanicWorkshop->vehicleTypes->pluck('id'): null, ['id' => 'vehicle_types', 'multiple' => 'multiple']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mechanicWorkshops.index') !!}" class="btn btn-default">Cancel</a>
</div>
