<!-- Id Gtk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_gtk', 'Id Gtk:') !!}
    {!! Form::select('id_gtk', $gtk, null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Jabatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    {!! Form::text('jabatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Nip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nip', 'Nip:') !!}
    {!! Form::text('nip', '-', ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::text('foto', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Karyawan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('karyawan', 'Karyawan:') !!}
    {!! Form::select('karyawan',['pns'=>'PNS', 'ptth'=>'PTTH', 'pkl'=>'PKL/Magang', 'lainnya'=>'lain-lain'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('employees.index') }}" class="btn btn-default">Cancel</a>
</div>
