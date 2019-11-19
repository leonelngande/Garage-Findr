@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Subdivision
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'subdivisions.store']) !!}

                        @include('subdivisions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
