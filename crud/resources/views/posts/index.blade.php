@extends("layout")

@section("content")
    <div class="my-3">
        <a href="{{ route('posts.create') }}">Novo</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Conteúdo</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <a class="btn btn-link"  href="{{ route('posts.show', $post->id) }}">Visualizar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection