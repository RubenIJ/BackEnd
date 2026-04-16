@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <p class="page-subtitle">Heb je een vraag? Stuur ons een bericht.</p>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <div class="form-card">
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="label">Naam</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="input">
                @error('name') <span class="alert-error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label class="label">E-mailadres</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="input">
                @error('email') <span class="alert-error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label class="label">Bericht</label>
                <textarea name="message" rows="5" required class="input">{{ old('message') }}</textarea>
                @error('message') <span class="alert-error">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-blue btn--full">Verstuur bericht</button>
        </form>
    </div>
@endsection
