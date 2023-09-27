<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

<a href="{{ route('posts.edit', $post->id) }}">Editar</a>
<form method="POST" action="{{ route('posts.destroy', $post->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Confirmar Exclusão</button>
</form>
<a href="{{ route('posts.index') }}">Voltar para a Listagem de Posts</a>