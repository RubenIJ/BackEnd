@extends('layouts.app')
@section('title', 'Beheer - Berichten')

@section('content')
    <div class="page-header">
        <h1>Ontvangen Berichten</h1>
        <div class="btn-group">
            <a href="{{ route('admin.menu') }}" class="btn btn-gray">← Naar menu</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-red">Uitloggen</button>
            </form>
        </div>
    </div>

    @if($messages->isEmpty())
        <div class="card card--empty">Er zijn nog geen berichten ontvangen.</div>
    @else
        <div class="card-list">
            @foreach($messages as $msg)
                <div class="card">
                    <div class="card-meta">
                        <div>
                            <strong>{{ $msg->name }}</strong>
                            <small>{{ $msg->email }}</small>
                        </div>
                        <time>{{ $msg->created_at->format('d-m-Y H:i') }}</time>
                    </div>
                    <p class="card-message">{{ $msg->message }}</p>
                </div>
            @endforeach
        </div>
    @endif
@endsection
