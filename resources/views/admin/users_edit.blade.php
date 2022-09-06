@extends('admin.app')

@section('content')
<h3>Edit Users</h3>

<form action="/admin/users/update/{{ $user->id }}" method="post">
    @csrf 
    <div class="form-group">
        <input type="text" name="nama" value="{{ $user->nama }}" placeholder="Enter User Name">
    </div>

    <div class="form-group">
        <input type="email" name="email" value="{{ $user->email }}" placeholder="Enter Email">
    </div>

    <div class="form-group">
        <input type="passwoard" name="password" placeholder="Enter Password">
    </div>

    <div class="form-group">
        <select name="role" class="form-control">
            <option value="admin" {{ $user->role != "admin" ?: "selected" }}>Admin</option>
            <option value="editor" {{ $user->role != "admin" ?: "selected" }}>Editor</option>
        </select>
    </div>

    <div class="form-group">
    <button class="form-bottom">Update User</button>
    </div>

</form>
@endsection