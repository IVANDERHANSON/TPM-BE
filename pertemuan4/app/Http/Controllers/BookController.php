<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create() {
        $categories = Category::all();
        return view('createBook', compact('categories'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'Title' => 'required|unique:books|min:5|max:30',
            'Author' => 'required',
            'PublishDate' => 'required',
            'Stock' => 'required|integer|min:5',
            'Image' => 'required|mimes:jpg, png'
        ]);

        $extension = $request->file('Image')->getClientOriginalExtension();
        // $filename = $request->file('Image')->getClientOriginalName();
        $filename = $request->Title.'_'.$request->Author.'.'.$extension;
        $request->file('Image')->storeAs('/public/Book/', $filename);

        Book::create([
            'Title' => $request -> Title,
            'Author' => $request -> Author,
            'PublishDate' => $request -> PublishDate,
            'Stock' => $request -> Stock,
            'Image' => $filename,
            'category_id' => $request->category
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
