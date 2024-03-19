<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('auth.dashboard', compact('books'));
    }

    public function create()
    {
        return view('auth.new-book');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'isbn' => 'required|between:10,17',
                'title' => 'required|string|min:3',
                'author' => 'required|string|min:3',
                'publisher' => 'required|string|min:3',
                'pages' => 'required|numeric|min:10'
            ]
        );
        if ($validator->fails()) {
            return redirect()->route('book.create')->withErrors($validator)->withInput();
        }
        // Salva no banco de dados
        Book::create($request->all());
        return redirect()->route('book.index');
    }

    public function edit(int $id)
    {
        $book = Book::findOrFail($id);
        return view('auth.edit-book', compact('book'));
    }

    public function update(Request $newBook, int $id)
    {
        $oldBook = Book::findOrFail($id);
        $oldBook->title = $newBook->title;
        $oldBook->author = $newBook->author;
        $oldBook->publisher = $newBook->publisher;
        $oldBook->pages = $newBook->pages;
        $oldBook->save();
        return redirect()->route('book.index');
    }

    public function destroy(int $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('book.index');
    }
}
