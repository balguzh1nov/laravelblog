<!-- resources/views/profile.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Профиль пользователя</h2>
        <div>
            <strong>Имя:</strong> {{ Auth::user()->name }}
        </div>
        <div>
            <strong>Email:</strong> {{ Auth::user()->email }}
        </div>
    </div>
@endsection
