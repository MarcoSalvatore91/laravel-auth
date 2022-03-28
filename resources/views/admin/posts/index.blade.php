@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h1>Personal Posts</h1>
        </div>
        <div>
            <a href="{{ route('admin.posts.create') }}">
                <h3 class="btn btn-primary">+ Aggiungi</h3>
            </a>
        </div>
    </div>
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
                <td class=" d-flex">
                    <a class="btn btn-info mr-2" href="{{ route('admin.posts.show', $post->id) }}"><i class="fa-solid fa-eye"></i></a>
                    <a class="btn btn-success mr-2" href="{{ route('admin.posts.edit', $post->id) }}"><i class="fa-solid fa-pen"></a></i>
                </td>
            </tr>
            @empty
            <p>Non Ci Sono Post</p>
            @endforelse
        </tbody>
    </table>
</div>
@endsection