@extends('layouts.app')
@section('title', 'Welkom')

@section('content')
    <div style="text-align: center; padding: 5rem 0;">
        <h1>Welkom bij Ons Restaurant</h1>
        <p style="color: #6b7280; font-size: 1.2rem; margin-bottom: 2rem;">Vers bereid, met liefde gemaakt.</p>
        <div style="display: flex; justify-content: center; gap: 1rem;">
            <a href="{{ route('menu.index') }}" class="btn btn-blue">Bekijk het menu</a>
            <a href="{{ route('contact.index') }}" class="btn btn-gray">Neem contact op</a>
        </div>
    </div>
@endsection
