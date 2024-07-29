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
        return view ('librarian.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('librarian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $books = new Books();
        $books->title = $request['title'];
        $books->author = $request['author'];
        $books->description = $request['description'];
        $books->isbn = $request['isbn'];
        $books->published_year = $request['published_year'];

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
