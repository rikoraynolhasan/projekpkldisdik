<!-- Judul Artikel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul_artikel', 'Judul Artikel:') !!}
    {!! Form::text('judul_artikel', null, ['class' => 'form-control', 'maxlength' => 50,'placeholder'=>'max judul 50 huruf']) !!}
</div>

<!-- Artikel Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('artikel', 'Artikel:') !!}
    {!! Form::textarea('artikel', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::date('tanggal', null, ['class' => 'form-control','id'=>'tanggal']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#tanggal').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endpush

<!-- Gambar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gambar', 'Gambar:') !!}
    {!! Form::file('gambar', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('news.index') }}" class="btn btn-default">Cancel</a>
</div>
