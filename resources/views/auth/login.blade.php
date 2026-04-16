@extends('layouts.app')
@section('title', 'Inloggen')

@section('content')
    <div class="form-card form-card--login">
        <h1 class="form-title">Inloggen</h1>

        @if($errors->any())
            <div class="alert-error">{{ $errors->first() }}</div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label class="label">E-mailadres</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="input">
            </div>
            <div class="form-group">
                <label class="label">Wachtwoord</label>
                <input type="password" name="password" required class="input">
            </div>
            <button type="submit" class="btn btn-blue btn--full">Inloggen</button>
        </form>

        <div class="form-footer">
            <a href="{{ route('menu.index') }}" class="nav-link">← Terug naar menu</a>
        </div>
    </div>
@endsection
