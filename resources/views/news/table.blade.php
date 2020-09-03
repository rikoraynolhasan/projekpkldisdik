<div class="table-responsive">
    <table class="table" id="news-table">
        <thead>
            <tr>
                <th>Judul Artikel</th>
        <th>Artikel</th>
        <th>Tanggal</th>
        <th>Kategori</th>
        <th>Gambar</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($news as $news) 
            <tr>
            <td>{{ $news->judul_artikel }}</td>
            <td>{{ $news->artikel }}</td>
            <td>{{ $news->tanggal }}</td>
            <td>{{ $news->kategori}}</td>
            <td><img src="{{ $news->gambar }}" alt="{{ $news->gambar }}" height="50"></td>
                <td>
                    {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('news.show', [$news->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('news.edit', [$news->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
