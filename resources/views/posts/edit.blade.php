<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}" required>
    <br>
    <label for="content">Conteúdo:</label>
    <textarea name="content" id="content" required>{{ $post->content }}</textarea>
    <br>
    <button type="submit">Salvar Alterações</button>
</form>

<a href="{{ route('posts.index') }}">Voltar para a Listagem de Posts</a>