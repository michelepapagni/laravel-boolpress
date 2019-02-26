<h1>Tutti i post della categoria {{ $category->title }}</h1>

<ul>
    @forelse ($posts as $post)
        <li>
            {{ $post->title }}
        </li>
    @empty
        <h1>Non ci sono post associati a questa categoria</h1>
    @endforelse
</ul>
