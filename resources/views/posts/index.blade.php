<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Посты</h2>
        
        @auth
            <a href="{{ route('posts.create') }}" class="btn btn-success mb-2">Создать пост</a>
        @endauth

        @if (count($posts) > 0)
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->content }}</p>
                                <p class="card-text"><small class="text-muted">Создано в: {{ $post->created_at }}</small></p>

                                @auth
                                    @if(auth()->user()->id == $post->user_id)
                                        <!-- Кнопки для редактирования и удаления своих постов -->
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Недоступно</p>
        @endif
    </div>
@endsection
