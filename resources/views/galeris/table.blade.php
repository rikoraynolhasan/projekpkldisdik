<div class="table-responsive">
    <table class="table" id="galeris-table">
        <thead>
            <tr>
                <th>Foto Url</th>
        <th>Nama</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($galeris as $galeri)
            <tr>
                <td><img src="{{ $galeri->foto_url }}" alt="{{ $galeri->foto_url }}" height="50"></td>
            <td>{{ $galeri->nama }}</td>
                <td>
                    {!! Form::open(['route' => ['galeris.destroy', $galeri->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('galeris.show', [$galeri->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('galeris.edit', [$galeri->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
