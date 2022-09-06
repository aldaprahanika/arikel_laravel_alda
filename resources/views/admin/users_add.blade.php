@extends('admin.app')

@section('content')
<h3>Add User</h3>
<form action="/admin/users/store" method="post">
    @csrf 
    <div class="form-group">
        <input type="text" name="nama" placeholder="Enter User Name">
    </div>

    <div class="form-group">
        <input type="email" name="email" placeholder="Enter Email">
    </div>

    <div class="form-group">
        <input type="passwoard" name="password" placeholder="Enter Password">
    </div>

    <div class="form-group">
        <select name="role" class="form-control">
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
        </select>
    </div>

    <div class="form-group">
    <button class="form-bottom">Create User</button>
    </div>

</form>
@endsection