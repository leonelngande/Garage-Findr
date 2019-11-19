<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Quarter Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quarter_id', 'Quarter:') !!}
    {!! Form::select('quarter_id', $quarters, null, ['class' => 'form-control']) !!}
</div>

<!-- Vehicle Types Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicle_types', 'Vehicle Types:') !!}
    {!! Form::select('vehicle_types[]', $vehicleTypes, isset($mechanicWorkshop) ? $mechanicWorkshop->vehicleTypes->pluck('id'): null, ['id' => 'vehicle_types', 'multiple' => 'multiple']) !!}
    {{--<select class="form-control" multiple="multiple" name="vehicle_types[]" id="vehicle_types">
        @foreach($vehicleTypes as $vehicleType)
            <option value="{{$vehicleType->id}}" @foreach($vehicleTypes as $p) @if($vehicleType->id == $p->id)selected="selected"@endif @endforeach>{{$vehicleType->name}}</option>
        @endforeach
    </select>--}}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mechanicWorkshops.index') !!}" class="btn btn-default">Cancel</a>
</div>
