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

        $extension = $request->file('Image')->getClientOriginalExtension();
        // $filename = $request->file('Image')->getClientOriginalName();
        $filename = $request->Title.'_'.$request->Author.'.'.$extension;
        $request->file('Image')->storeAs('/public/Book/', $filename);

        Book::create([
            'Title' => $request -> Title,
            'Author' => $request -> Author,
            'PublishDate' => $request -> PublishDate,
            'Stock' => $request -> Stock,
            'Image' => $filename
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

    public function edit($id) {
        $book = Book::findOrFail($id);
        return view('editBook', compact('book'));
    }

    public function update(Request $request, $id) {
        $extension = $request->file('Image')->getClientOriginalExtension();
        // $filename = $request->file('Image')->getClientOriginalName();
        $filename = $request->Title.'_'.$request->Author.'.'.$extension;
        $request->file('Image')->storeAs('/public/Book/', $filename);

        Book::findOrFail($id)->update([
            'Title' => $request -> Title,
            'Author' => $request -> Author,
            'PublishDate' => $request -> PublishDate,
            'Stock' => $request -> Stock,
            'Image' => $filename
        ]);
        return redirect('/home');
    }

    public function delete($id) {
        Book::destroy($id);
        return redirect('/home');
    }
}
