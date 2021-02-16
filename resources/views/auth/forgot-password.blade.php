@extends('templates.main')
@section('content')
    <h1>Reset Password</h1>


    <form action="{{ route('password.email') }}" method="post">
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

        <button type="submit" class="btn btn-primary">Reset Password</button>
    </form>

@endsection
