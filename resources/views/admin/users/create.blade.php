@extends('templates.main')
@section('content')
    <h1>Crate New User</h1>

    <div class="card">
        <form action="{{ route('admin.users.store') }}" method="post">
            @include('admin.users.partials.form',['create'=>true])
        </form>
    </div>
@endsection
