@extends('templates.main')
@section('content')
    <h1>Password Reset</h1>
    <form action="{{ url('reset-password') }}" method="post">
        @csrf

        <input type="hidden" name="token" value="{{ $request->token }}">

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control  @error('email') is-invalid  @enderror" name="email" id="email" aria-describedby="emailHelp"
                   value="{{ $request->email}}">
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
