@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Galeri
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($galeri, ['route' => ['galeris.update', $galeri->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('galeris.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection