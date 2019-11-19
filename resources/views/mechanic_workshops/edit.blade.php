@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mechanic Workshop
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mechanicWorkshop, ['route' => ['mechanicWorkshops.update', $mechanicWorkshop->id], 'method' => 'patch']) !!}

                        @include('mechanic_workshops.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection