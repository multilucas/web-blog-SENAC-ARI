<h1>Listagem de Posts</h1>
@foreach ($posts as $post)
    <a href="{{ route('posts.show', $post->id) }}">
        <h2>{{ $post->title }}</h2>
    </a>
    <p>{{ $post->content }}</p>
    <hr>
    @endforeach
</ul>

<a href="{{ route('posts.create') }}">Criar Novo Post</a>