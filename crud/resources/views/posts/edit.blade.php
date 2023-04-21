@extends("layout")

@section("content")
    <h2>Alterar Post</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title" placeholder="Título">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Autor</label>
            <input type="text" class="form-control" id="author" value="{{ $post->author }}" name="author" placeholder="Autor">
        </div>
        
        <div class="mb-3">
            <label for="content" class="form-label">Conteúdo</label>
            <textarea class="form-control" id="content" name="content" rows="3" >{{ $post->content }}</textarea>
        </div>
         
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>

@endsection