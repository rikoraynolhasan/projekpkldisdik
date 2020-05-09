<div class="table-responsive">
    <table class="table" id="heads-table">
        <thead>
            <tr>
        <th>Nama</th>
        <th>Gtk</th>
        <th>Jabatan</th>
        <th>Nip</th>
        <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($heads as $head)
            <tr>
            <td>{{ $head->nama }}</td>
            <td>{{ $head->idGtk->gtk }}</td>
            <td>{{ $head->jabatan }}</td>
            <td>{{ $head->nip }}</td>
            <td>{{ $head->foto }}</td>
                <td>
                    {!! Form::open(['route' => ['heads.destroy', $head->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('heads.show', [$head->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('heads.edit', [$head->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
