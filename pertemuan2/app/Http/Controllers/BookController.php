<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create() {
        return view('createBook');
    }

    public function store(Request $request) {
        Book::create([
            'Title' => $request -> Title,
            'Author' => $request -> Author,
            'PublishDate' => $request -> PublishDate,
            'Stock' => $request -> Stock,
        ]);
        return redirect('/home');
    }

    public function index() {
        $books = Book::all();
        return view('welcome', compact('books'));
    }

    public function show($id) {
        $book = Book::findOrFail($id);
        return view('showbook', compact('book'));
    }
}
