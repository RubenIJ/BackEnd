@extends('layouts.app')
@section('title', 'Beheer Menu')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1>Beheer Menukaart</h1>
        <div style="display: flex; gap: 10px;">
            <a href="{{ route('menu.create') }}" class="btn btn-blue">+ Gerecht</a>
            <form action="{{ route('logout') }}" method="POST">@csrf <button class="btn btn-gray">Uitloggen</button></form>
        </div>
    </div>

    <div class="grid">
        @foreach ($menuItems as $item)
            <div class="card">
                <div style="display: flex; justify-content: space-between;">
                    <h3>{{ $item->name }}</h3>
                    <span class="price-badge">€{{ number_format($item->price, 2, ',', '.') }}</span>
                </div>
                <div style="margin-top: 1rem; display: flex; gap: 10px;">
                    <a href="{{ route('menu.edit', $item) }}" class="btn btn-yellow">Aanpassen</a>
                    <form action="{{ route('menu.destroy', $item) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="btn btn-red" onclick="return confirm('Zeker weten?')">Wissen</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
