<!-- Foto Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_url', 'Foto Url:') !!}
    {!! Form::file('foto_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('galeris.index') }}" class="btn btn-default">Cancel</a>
</div>
