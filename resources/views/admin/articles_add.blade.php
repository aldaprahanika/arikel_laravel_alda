@extends('admin.app')

@section('content')
<h3>Add Article</h3>
<form action="/admin/articles/store" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="title" placeholder="Masukan Judul">
    </div>

    <div class="form-grop">
        <textarea name="body" class="from-control" rows="10" placeholder="Masukan Isi"></textarea>
    </div>

    <div class="form-group">
        <input type="date" name="date" class="form-control">
    </div>

    <div class="form-group">
        <button class="form-bottom">Submit</button>
    </div>
</form>
@endsection
