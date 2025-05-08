<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $profiles = [
        1 => ['name' => 'Nada Alaa', 'age' => 20, 'email' => 'nada@gmail.com'],
        2 => ['name' => 'Osama Alaa', 'age' => 24, 'email' => 'ahmed@gmail.com'],
        3 => ['name' => 'Sara Hassan', 'age' => 22, 'email' => 'sara@gmail.com'],
        4 => ['name' => 'Mohamed Adel', 'age' => 28, 'email' => 'mohamed@gmail.com'],
        5 => ['name' => 'Fatma Khaled', 'age' => 26, 'email' => 'fatma@gmail.com'],
        6 => ['name' => 'Youssef Samir', 'age' => 23, 'email' => 'youssef@gmail.com'],
    ];

    public function index()
    {
        return view('profiles.index', ['profiles' => $this->profiles]);
    }

    public function show($id)
    {
        $profile = $this->profiles[$id] ?? null;

        if (!$profile) {
            abort(404);
        }

        return view('profiles.show', ['profile' => $profile]);
    }
}
