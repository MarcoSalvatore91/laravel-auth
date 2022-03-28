@extends('layouts.app')

@section('content')
<form class="container" action="{{ route('admin.posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" name="title" required minlength="5" maxlength="50" value="{{ old('title') }}">
        <small class="form-text text-muted">Inserisci un titolo</small>
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
        <small class="form-text text-muted">Inserisci un'immagine</small>
    </div>
    <div class="form-group">
        <label for="content">Descrizione</label>
        <textarea class="form-control" @error('content') is-invalid @enderror id="content" name="content" rows="5" required minlength="5">{{ old('content') }}</textarea>
        <small class="form-text text-muted">Aggiungi una descrizione</small>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Invia</button>
    </div>
</form>
@endsection