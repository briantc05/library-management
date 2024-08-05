<?php

namespace App\Http\Controllers;

use App\Models\Books;

use Illuminate\Http\Request;

class LibrarianController extends Controller
{

    public function index()
    {
        //
        $data['books'] = Books::all();
        return view ('books.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'isbn' => 'required|unique:books',
            'published_year' => 'required',
        ]);
        $book = new Books();
        $book->title = $request['title'];
        $book->author = $request['author'];
        $book->description = $request['description'];
        $book->isbn = $request['isbn'];
        $book->published_year = $request['published_year'];
        $book->save();

        return back()->with('success', 'Book Succesfully Created');

    }

    /**
     * Display the specified resource.
     */
    public function show($isbn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($isbn)
    {

        $data['books'] = Books::find($isbn);
        return view ('books.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $isbn)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'nullable',
            'published_year' => 'required',
        ]);

        $book = Books::find($isbn);
        $book->title = $request['title'];
        $book->author = $request['author'];
        $book->description = $request['description'];
        // $book->isbn = $request['isbn'];
        $book->published_year = $request['published_year'];
        $book->save();

        return redirect()->to('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($isbn)
    {
        $book = Books::find($isbn);
        $book->delete();

        return redirect()->to('books');
    }
}
