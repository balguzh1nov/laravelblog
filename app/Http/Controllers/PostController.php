<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Подключаем модель постов
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        // Здесь можно реализовать вывод всех постов
        
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
{
    // Проверяем, авторизован ли пользователь
    if (Auth::check()) {
        return view('posts.create');
    }

    // Если пользователь не авторизован, перенаправляем его на страницу входа
    return redirect()->route('login')->with('error', 'You need to log in to create a post.');
}

public function store(Request $request)
{
    // Проверяем, авторизован ли пользователь
    if (Auth::check()) {
        // Ваша логика сохранения поста
        $post = auth()->user()->posts()->create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    // Если пользователь не авторизован, перенаправляем его на страницу входа
    return redirect()->route('login')->with('error', 'You need to log in to create a post.');
}
}
