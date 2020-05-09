@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Head
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($head, ['route' => ['heads.update', $head->id], 'method' => 'patch']) !!}

                        @include('heads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection