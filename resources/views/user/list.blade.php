@extends('master.master')

@section('content')
<a class="btn btn-primary" href="{{ route('user.formAdd') }}">Add User</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Number</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>   
        <th scope="col">Action</th>   
      </tr>
    </thead>
    <tbody>

    @foreach ($users as $key => $user)
       <tr>
            <th scope="row">{{ ++$key }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @foreach ($user->roles as $role)
                    {{ $role->name }},
                @endforeach
            </td>
            <td><a class="btn btn-primary" href="{{ route('user.formEdit', $user->id) }}">Edit</a></td>
            <td><a onclick="return confirm('Ban co chac chan muon xoa?')" class="btn btn-primary" href="{{ route('user.delete', $user->id) }}">Delete</a></td>
        </tr>
    @endforeach
   
    
    
    </tbody>
    
  </table>
@endsection