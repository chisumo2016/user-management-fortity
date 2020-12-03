@extends('templates.main')
@section('content')
    <h1>Edit New User</h1>

    <div class="card">
        <form action="{{ route('admin.users.update',$user->id) }}" method="post">
            @method('patch')
            @include('admin.users.partials.form')
        </form>
    </div>
@endsection
