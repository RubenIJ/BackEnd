@extends('layouts.app')
@section('title', 'Beheer - Berichten')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1>Ontvangen Berichten</h1>
        <div style="display: flex; gap: 10px;">
            <a href="{{ route('admin.menu') }}" class="btn btn-gray">← Naar menu</a>
            <form action="{{ route('logout') }}" method="POST">@csrf <button class="btn btn-red">Uitloggen</button></form>
        </div>
    </div>

    @if($messages->isEmpty())
        <div class="card" style="text-align: center;">Er zijn nog geen berichten ontvangen.</div>
    @else
        <div style="display: flex; flex-direction: column; gap: 1rem;">
            @foreach($messages as $msg)
                <div class="card">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #f3f4f6; padding-bottom: 0.5rem;">
                        <div>
                            <strong style="display: block;">{{ $msg->name }}</strong>
                            <small style="color: #6b7280;">{{ $msg->email }}</small>
                        </div>
                        <span style="font-size: 0.75rem; color: #9ca3af;">{{ $msg->created_at->format('d-m-Y H:i') }}</span>
                    </div>
                    <p style="margin-top: 1rem; color: #374151; white-space: pre-line;">{{ $msg->message }}</p>
                </div>
            @endforeach
        </div>
    @endif
@endsection
