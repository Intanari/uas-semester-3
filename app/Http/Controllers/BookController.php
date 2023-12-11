<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('dashboard', compact('books'));    
    }

    public function store(Request $request)
    {
        Book::create($request->only(['title', 'writer', 'publisher']));
        return redirect()->route('dashboard');
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->only(['title', 'writer', 'publisher']));
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('dashboard');
    }
}
