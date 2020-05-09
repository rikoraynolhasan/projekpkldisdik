<div class="table-responsive">
    <table class="table" id="gtks-table">
        <thead>
            <tr>
                <th>Gtk</th>
        <th>Visi</th>
        <th>Misi</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gtks as $gtk)
            <tr>
                <td>{{ $gtk->gtk }}</td>
            <td>{{ $gtk->visi }}</td>
            <td>{{ $gtk->misi }}</td>
                <td>
                    {!! Form::open(['route' => ['gtks.destroy', $gtk->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gtks.show', [$gtk->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('gtks.edit', [$gtk->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
