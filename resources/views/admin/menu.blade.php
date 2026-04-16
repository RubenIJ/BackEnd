@extends('layouts.app')
@section('title', 'Beheer Menu')

@section('content')
    <div class="page-header">
        <h1>Beheer Menukaart</h1>
        <div class="btn-group">
            <a href="{{ route('menu.create') }}" class="btn btn-blue">+ Gerecht</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-gray">Uitloggen</button>
            </form>
        </div>
    </div>

    <div class="grid">
        @foreach ($menuItems as $item)
            <div class="card">
                <div class="card-header">
                    <h3>{{ $item->name }}</h3>
                    <span class="price-badge">€{{ number_format($item->price, 2, ',', '.') }}</span>
                </div>
                <div class="card-actions">
                    <a href="{{ route('menu.edit', $item) }}" class="btn btn-yellow">Aanpassen</a>
                    <form action="{{ route('menu.destroy', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-red" onclick="return confirm('Zeker weten?')">Wissen</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
