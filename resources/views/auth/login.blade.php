@extends('layouts.app')
@section('title', 'Inloggen')

@section('content')
    <div style="max-w: 400px; margin: 5rem auto;">
        <div class="form-card">
            <h1 style="margin-top: 0; margin-bottom: 1.5rem; text-align: center;">Inloggen</h1>

            @if($errors->any())
                <div style="background-color: #fee2e2; color: #b91c1c; padding: 0.75rem; border-radius: 0.5rem; margin-bottom: 1rem; font-size: 0.875rem;">
                    {{ $errors->first() }}
                </div>
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
                <button type="submit" class="btn btn-blue" style="width: 100%;">Inloggen</button>
            </form>
            <div style="text-align: center; margin-top: 1rem;">
                <a href="{{ route('menu.index') }}" class="nav-link" style="font-size: 0.875rem;">← Terug naar menu</a>
            </div>
        </div>
    </div>
@endsection
