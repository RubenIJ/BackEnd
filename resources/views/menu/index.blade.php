@extends('layouts.app')
@section('title', 'Onze Menukaart')

@section('content')
    <div class="page-header">
        <div>
            <h1>Onze Menukaart</h1>
            <p>Ontdek onze met zorg bereide gerechten</p>
        </div>
        <a href="{{ route('login') }}" class="nav-link">Beheerpaneel</a>
    </div>

    @if($menuItems->isEmpty())
        <div class="card card--empty">
            Er staan op dit moment helaas geen gerechten op ons menu.
        </div>
    @else
        <div class="grid">
            @foreach ($menuItems as $item)
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $item->name }}</h2>
                        <span class="price-badge">€{{ number_format((float)$item->price, 2, ',', '.') }}</span>
                    </div>
                    <p class="card-body">{{ $item->description }}</p>
                </div>
            @endforeach
        </div>
    @endif
@endsection
