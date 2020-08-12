@extends('master.master')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="mt-3" >Edit User</h3>
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                
                <div class="form-group">
                    <p>Permision:</p>
                    @foreach ($roles as $role)
                        <input type="checkbox" id="role-{{ $role->name }}" name="role[{{ $role->id }}]" value="{{ $role->id }}"
                            @foreach ($user->roles as $roleUser)
                                @if ($roleUser->id == $role->id)
                                    checked
                                @endif
                            @endforeach
                        
                        >
                        <label for="role-{{ $role->name }}">{{ $role->name }}</label><br>    
                    @endforeach
                </div>

                <button class="btn btn-primary">Update User</button>
            </form>
        </div>

    </div>

@endsection