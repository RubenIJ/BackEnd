@extends('layouts.app')
@section('title', 'Onze Menukaart')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2.5rem; border-bottom: 2px solid #f3f4f6; padding-bottom: 1rem;">
        <div>
            <h1 style="margin: 0; font-size: 2.5rem;">Onze Menukaart</h1>
            <p style="color: #6b7280; margin-top: 0.25rem;">Ontdek onze met zorg bereide gerechten</p>
        </div>
        <a href="{{ route('login') }}" class="nav-link" style="font-size: 0.9rem; color: #9ca3af;">
            Beheerpaneel
        </a>
    </div>

    @if($menuItems->isEmpty())
        <div class="card" style="text-align: center; padding: 4rem;">
            <p style="color: #9ca3af; font-size: 1.1rem;">Er staan op dit moment helaas geen gerechten op ons menu.</p>
        </div>
    @else
        <div class="grid">
            @foreach ($menuItems as $item)
                <div class="card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 1rem;">
                        <h2 style="margin: 0; font-size: 1.25rem; color: #1f2937;">{{ $item->name }}</h2>
                        <span class="price-badge">
                            €{{ number_format((float)$item->price, 2, ',', '.') }}
                        </span>
                    </div>

                    <p style="color: #4b5563; margin-top: 1rem; font-size: 0.95rem; line-height: 1.6;">
                        {{ $item->description }}
                    </p>
                </div>
            @endforeach
        </div>
    @endif
@endsection
