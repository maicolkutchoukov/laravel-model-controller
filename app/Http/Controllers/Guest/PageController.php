<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        // I recover all the films, as if I were writing 'SELECT * FROM `movies`'
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    public function show($id)
    {
        // Recupera il singolo elemento di questo tipo di dato
        // Book::where('id', $id)->first() -> sulla tabella che si chiama books, esegui la query:
        // SELECT * FROM books WHERE id = $id
        $movie = Movie::where('id', $id)->first();

        return view('show', compact('movie'));
    }

}
