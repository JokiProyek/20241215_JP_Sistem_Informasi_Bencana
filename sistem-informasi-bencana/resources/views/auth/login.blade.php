@extends('layouts.auth')

@section('content')
<div class="login-card">
    <h1 class="login-title">SISTEM INFORMASI BENCANA</h1>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="form-group">
            <label for="email">USERNAME</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">PASSWORD</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <div class="forgot-password">
            <a href="{{ route('password.request') }}">LUPA PASSWORD</a>
        </div>

        <button type="submit" class="login-btn">
            MASUK
        </button>
    </form>
</div>
@endsection