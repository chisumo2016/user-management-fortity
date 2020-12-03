@extends('templates.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="float-left">User</h1>
            <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-success float-right" role="button">Create New User</a>
        </div>
    </div>
    <div class="card">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary" role="button"> Edit</a>

                        <button class="btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('delete-user-form-{{ $user->id }}').submit();"> Delete</button>
                        <form  id="delete-user-form-{{ $user->id }}" action="{{ route('admin.users.destroy',$user->id) }}" method="post" style="display: none">
                            @csrf
                            @method("DELETE")
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
@endsection
