@extends('layouts.app')
@section('title', 'Gerecht Toevoegen')

@section('content')
    <a href="{{ route('admin.menu') }}" class="nav-link">← Terug naar beheer</a>

    <h1 class="page-nav-title">Nieuw Gerecht</h1>

    <div class="form-card">
        <form action="{{ route('menu.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="label">Naam van het gerecht</label>
                <input type="text" name="name" required class="input">
            </div>
            <div class="form-group">
                <label class="label">Omschrijving</label>
                <textarea name="description" rows="3" required class="input"></textarea>
            </div>
            <div class="form-group">
                <label class="label">Prijs (€)</label>
                <input type="number" name="price" step="0.01" required class="input">
            </div>
            <button type="submit" class="btn btn-blue btn--full">Opslaan</button>
        </form>
    </div>
@endsection
