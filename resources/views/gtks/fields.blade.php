<!-- Gtk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gtk', 'Gtk:') !!}
    {!! Form::text('gtk', null, ['class' => 'form-control']) !!}
</div>

<!-- Visi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('visi', 'Visi:') !!}
    {!! Form::textarea('visi', null, ['class' => 'form-control']) !!}
</div>

<!-- Misi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('misi', 'Misi:') !!}
    {!! Form::textarea('misi', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('gtks.index') }}" class="btn btn-default">Cancel</a>
</div>
