@extends('admin.app')

@section('content')
<h3>Edit Article</h3>
<form action="/admin/articles/update/{{ $article->id }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="title" value="{{ $article->title }}" placeholder="Masukan Judul">
    </div>

    <div class="form-grop">
        <textarea name="body" class="from-control" rows="10" placeholder="Masukan Isi">{{ $article->body }}</textarea>
    </div>

    <div class="form-group">
        <input type="date" name="date" value="{{ $article->date }}" class="form-control">
    </div>

    <div class="form-group">
        <button class="form-bottom">Update</button>
    </div>
</form>
@endsection
