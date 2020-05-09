<!-- Judul Artikel Field -->
<div class="form-group">
    {!! Form::label('judul_artikel', 'Judul Artikel:') !!}
    <p>{{ $news->judul_artikel }}</p>
</div>

<!-- Artikel Field -->
<div class="form-group">
    {!! Form::label('artikel', 'Artikel:') !!}
    <p>{{ $news->artikel }}</p>
</div>

<!-- Tanggal Field -->
<div class="form-group">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    <p>{{ $news->tanggal }}</p>
</div>

<!-- Gambar Field -->
<div class="form-group">
    {!! Form::label('gambar', 'Gambar:') !!}
    <p>{{ $news->gambar }}</p>
</div>

