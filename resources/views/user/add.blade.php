@extends('master.master')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="mt-3" >Add User</h3>
            <form action="{{ route('user.add') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="User Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="User Email">
                </div>
                
                <div class="form-group">
                    @foreach ($roles as $role)
                    <input type="checkbox" id="role-{{ $role->name }}" name="role[{{ $role->id }}]" value="{{ $role->id }}">
                    <label for="role-{{ $role->name }}">{{ $role->name }}</label><br>    
                    @endforeach
                    
                </div>

                <button class="btn btn-primary">Add User</button>
            </form>
        </div>

    </div>

@endsection