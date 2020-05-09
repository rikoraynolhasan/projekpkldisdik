<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
            <tr>
                <th>Gtk</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Nip</th>
        <th>Foto</th>
        <th>Karyawan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->idGtk->gtk }}</td>
            <td>{{ $employee->nama }}</td>
            <td>{{ $employee->jabatan }}</td>
            <td>{{ $employee->nip }}</td>
            <td>{{ $employee->foto }}</td>
            <td>{{ $employee->karyawan }}</td>
                <td>
                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employee->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('employees.edit', [$employee->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
