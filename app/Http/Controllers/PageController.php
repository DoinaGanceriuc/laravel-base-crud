<?php

namespace App\Http\Controllers;

use App\Models\Comic;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $comics = Comic::all();
        return view('comics', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('show', compact('comic'));
    }
}
