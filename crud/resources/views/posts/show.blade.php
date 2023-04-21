@extends("layout")

@section("content")
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $post->author }}</h6>
            <p class="card-text">{{ $post->content }}</p>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method("delete")
                <a href="{{ route('posts.edit', $post->id) }}" class="card-link ">Editar</a>
                <button type="submit" class="card-link text-danger btn btn-link">Deletar</button>
            </form>
        </div>
    </div>
@endsection