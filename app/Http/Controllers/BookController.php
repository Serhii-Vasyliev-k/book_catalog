<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();
        return view('books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Books();
        $book->title = $request->get('title');
        $book->author = $request->get('author');
        $book->annotations = $request->get('annotations');
        $book->save();

        /*********/
        //Books::create($request->all());

        return redirect(route('book_index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Books::findOrFail((int)$id);
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::findOrFail((int)$id);
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = [
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'annotations' => $request->get('annotations')
        ];
        Books::where('id', $id)->update($book);
        return redirect(route('book_index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Books::destroy($id);
        return redirect(route('book_index'));
    }
}
