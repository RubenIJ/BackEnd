@extends('layouts.app')
@section('title', 'Gerecht Aanpassen')

@section('content')
    <div style="max-w: 600px; margin: 0 auto;">
        <a href="{{ route('admin.menu') }}" class="nav-link" style="font-size: 0.875rem;">← Terug naar beheer</a>
        <h1 style="margin-top: 1rem;">Gerecht Aanpassen</h1>

        <div class="form-card">
            <form action="{{ route('menu.update', $menu) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="label">Naam</label>
                    <input type="text" name="name" value="{{ old('name', $menu->name) }}" class="input">
                </div>
                <div class="form-group">
                    <label class="label">Beschrijving</label>
                    <textarea name="description" rows="4" class="input">{{ old('description', $menu->description) }}</textarea>
                </div>
                <div class="form-group">
                    <label class="label">Prijs (€)</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price', $menu->price) }}" class="input">
                </div>
                <button type="submit" class="btn btn-blue" style="width: 100%;">Wijzigingen Opslaan</button>
            </form>
        </div>
    </div>
@endsection
