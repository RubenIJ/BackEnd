@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    <div style="max-w: 600px; margin: 0 auto;">
        <h1>Contact</h1>
        <p style="color: #6b7280; margin-bottom: 2rem;">Heb je een vraag? Stuur ons een bericht.</p>

        @if(session('success'))
            <div class="card" style="background-color: #dcfce7; color: #15803d; margin-bottom: 1.5rem;">
                ✅ {{ session('success') }}
            </div>
        @endif

        <div class="form-card">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="label">Naam</label>
                    <input type="text" name="name" value="{{ old('name') }}" required class="input">
                    @error('name') <small style="color: #b91c1c;">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label class="label">E-mailadres</label>
                    <input type="email" name="email" value="{{ old('email') }}" required class="input">
                    @error('email') <small style="color: #b91c1c;">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label class="label">Bericht</label>
                    <textarea name="message" rows="5" required class="input">{{ old('message') }}</textarea>
                    @error('message') <small style="color: #b91c1c;">{{ $message }}</small> @enderror
                </div>
                <button type="submit" class="btn btn-blue" style="width: 100%;">Verstuur bericht</button>
            </form>
        </div>
    </div>
@endsection
