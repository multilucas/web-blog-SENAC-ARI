<h1>Criar Novo Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
@csrf
    <div>
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="content">Conteúdo:</label>
        <textarea name="content" id="content" required></textarea>
    </div>
    <button type="submit">Criar Post</button>
</form>

<a href="{{ route('posts.index')}}">Voltar para a Listagem de Posts</a>