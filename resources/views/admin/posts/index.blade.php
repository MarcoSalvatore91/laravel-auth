@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Personal Posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Creato il:</th>
                <th scope="col">Contenuto</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <th scope="row">{{ $post->title }}</th>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->content }}</td>
                <td><a href="{{ route('admin.posts.edit', $post->id) }}"><i class="fa-solid fa-pen"></a></i></td>
            </tr>
            @empty
            <p>Non Ci Sono Post</p>
            @endforelse
        </tbody>
    </table>
</div>
@endsection