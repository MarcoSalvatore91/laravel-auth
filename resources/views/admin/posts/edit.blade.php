@extends('layouts.app')

@section('content')
<form class="container" action="{{ route('admin.posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" required minlength="5" maxlength="50" value="{{ old('title', $post->title) }}">
        <small class="form-text text-muted">Inserisci un titolo</small>
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $post->image) }}">
        <small class="form-text text-muted">Inserisci un'immagine</small>
    </div>
    <div class="form-group">
        <label for="content">Example textarea</label>
        <textarea class="form-control" id="content" name="content" rows="5" required minlength="5">{{ old('content', $post->content) }}</textarea>
        <small class="form-text text-muted">Aggiungi una descrizione</small>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Invia</button>
    </div>
</form>
@endsection