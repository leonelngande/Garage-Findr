@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Quarter
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($quarter, ['route' => ['quarters.update', $quarter->id], 'method' => 'patch']) !!}

                        @include('quarters.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection