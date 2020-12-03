@extends('templates.main')
@section('content')
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name"  name="name" aria-describedby="emailHelp" value="{{ old('name') }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control  @error('email') is-invalid  @enderror" name="email" id="email" aria-describedby="emailHelp" value="{{ old('email') }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control  @error('password') is-invalid  @enderror" id="password" name="password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password_confirmation">Password Confirm</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
