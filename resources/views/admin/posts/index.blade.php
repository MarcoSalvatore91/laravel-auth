@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Personal Posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Contenuto</th>
                <th scope="col">Immagine</th>
                <th scope="col">Slug</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <th scope="row">{{ $post->title }}</th>
                <td>{{ $post->content }}</td>
                <td>{{ $post->image }}</td>
                <td>{{ $post->slug }}</td>
            </tr>
            @empty
            <p>Non Ci Sono Post</p>
            @endforelse
        </tbody>
    </table>
</div>
@endsection