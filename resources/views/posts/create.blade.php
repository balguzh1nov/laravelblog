<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Создать пост</h2>

        @auth
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Заголовок:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Контент:</label>
                    <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        @else
            <p>Вы должны быть авторизованы.</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Войти</a>
        @endauth
    </div>
@endsection
