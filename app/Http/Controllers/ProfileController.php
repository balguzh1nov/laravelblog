<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }
}
