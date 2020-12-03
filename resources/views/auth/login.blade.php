@extends('templates.main')
@section('content')
    <h1>Login</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf

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

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
