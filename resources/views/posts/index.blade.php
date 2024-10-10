<x-layout meta-title="Blog" meta-description="Descripcion de la página del Blog">
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2><a href="{{ route('posts.index', $post)}}">{{ $post->title }}</a></h2>
    @endforeach


</x-layout>
