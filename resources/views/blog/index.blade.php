@extends('base')

@section('title', 'Acceuille du blog')

@section('content')
    <h1>mon blog</h1>

    @foreach($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>
                {{ $post->content }}
            </p>
            <p>
                <a href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}">Lire la suite</a>
            </p>
        </article>
    @endforeach

    {{ $posts->links() }}    
@endsection
