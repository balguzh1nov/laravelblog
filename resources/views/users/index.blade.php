<!-- resources/views/users/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Список</h2>

        @foreach($users as $user)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">{{ $user->email }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
